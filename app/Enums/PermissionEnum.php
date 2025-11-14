<?php

namespace App\Enums;

enum PermissionEnum
{
    const PERMISSIONS = [
        //guard_name - Format: module_action
        ['name' => 'dashboard_view', 'readable_name' => 'View Admin Dashboard'],
        ['name' => 'stores_view', 'readable_name' => 'View Stores'],
        ['name' => 'stores_edit', 'readable_name' => 'Edit Stores'],
        ['name' => 'stores_sort', 'readable_name' => 'Sort Stores'],
        ['name' => 'stores_approve', 'readable_name' => 'Approve Pending Stores'],
        ['name' => 'stores_add', 'readable_name' => 'Add Store'],
    ];
}
