<?php

namespace App\DataTables\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    public function index(Request $request)
    {
        $users = User::latest();

        return DataTables::of($users)
            ->addColumn('name', function ($user) {
                return $user->first_name . ' ' . $user->last_name;
            })
            ->addColumn('action', function ($row) {
                $html = '<div class="float-end">';
                if (auth()->user()->id != $row->id && $row->system_role != 'admin') {
                    $html .= '
                     <a href="' . route('admin.users.impersonate', $row->id) . '" data-bs-toggle="tooltip" class="mx-1" data-bs-placement="top" data-bs-title="Login as User">
                        <i data-feather="log-in"></i>
                    </a>';
                }
                $html .= '
                    <a href="#createUserModal" data-bs-toggle="tooltip" class="mx-1 editUser" data-bs-placement="top" data-bs-title="Edit User" data-id="' . $row->id . '" data-sysrole="' . $row->system_role . '" data-data=\'' . htmlspecialchars(json_encode($row)) . '\'>
                        <i data-feather="edit"></i>
                    </a>';
                $html .= '</div>';
                return $html;
            })

            ->addColumn('verified', function ($row) {
                return $row->email_verified_at ? '<span class="badge text-bg-success">Verified</span>' : '<span class="badge text-bg-danger">Unverified</span>';
            })
            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('Y-m-d') . '<br>' . $user->created_at->format('h:i A');
            })
            ->filterColumn('name', function (QueryBuilder $query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('first_name', 'like', "%{$keyword}%")
                        ->orWhere('last_name', 'like', "%{$keyword}%");
                });
            })
            ->editColumn('system_role', function ($user) {
                return $user->system_role == "admin" ? "<span class='badge text-bg-primary'>Admin</span>" : "<span class='badge text-bg-secondary'>User</span>";
            })
            ->addColumn('status', function ($row) {
                $checked = $row->is_active ? 'checked="checked"' : '';
                return '
        <div class="form-check form-switch mb-2">
            <input type="checkbox" class="form-check-input input-success status_switch"
                   id="customswitchv1-' . $row->id . '"
                   ' . $checked . '
                   data-id="' . $row->id . '">

        </div>';
            })
            ->rawColumns(['created_at', 'status', 'action', 'name', 'verified', 'system_role'])
            ->make(true);
    }
}
