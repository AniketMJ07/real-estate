<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use App\Models\User;
use App\Models\Module;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        app(PermissionRegistrar::class)->forgetCachedPermissions();
        $permissions = PermissionEnum::PERMISSIONS;

        foreach ($permissions as $key => $permission) {
            Permission::updateOrCreate($permission);
        }

        $admin = Role::updateOrCreate([
            'name' => RoleEnum::ADMIN,
        ]);
        $user = User::factory()->create([
            'name' => 'demo admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('123456789'),
            'phone' => '612345678',

        ]);
        $user->assignRole($admin);
        $user->givePermissionTo(Permission::all());



        // agent
        $userRole = Role::updateOrCreate([
            'name' => RoleEnum::AGENT,

        ]);

        $user = User::factory()->create([
            'name' => 'demo provider',
            'email' =>  'provider@demo.com',
            'password' => Hash::make('123456789'),
            'phone' => '0123654789',
            'is_active' => '1',
          
        ]);
        $user->assignRole($userRole);

        // user role 
        $userRole = Role::updateOrCreate([
            'name' => RoleEnum::USER,
        ]);
        
        $user = User::factory()->create([
            'name' => 'demo user',
            'email' => 'user@demo.com',
            'password' => Hash::make('123456789'),
            'phone' => '0123456789',
            'is_active' => '1',
          
        ]);
        $user->assignRole($userRole);
    }
}
