<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'manage-roles', 'guard_name' => 'bo']);
        Permission::create(['name' => 'manage-permissions', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-users', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-users', 'guard_name' => 'bo']);

        Permission::create(['name' => 'view-loans', 'guard_name' => 'bo']);
        Permission::create(['name' => 'update-loans', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-loans', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-measures', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-measures', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-posts', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-posts', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-settings', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-settings', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-loaners', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-loaners', 'guard_name' => 'bo']);

        Permission::create(['name' => 'view-actions', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-actions', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-complexes', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-complexes', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-improvements', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-improvements', 'guard_name' => 'bo']);

        Permission::create(['name' => 'view-logs', 'guard_name' => 'bo']);

        Permission::create(['name' => 'manage-loan-requests', 'guard_name' => 'bo']);
        Permission::create(['name' => 'edit-loan-requests', 'guard_name' => 'bo']);
        Permission::create(['name' => 'delete-loan-requests', 'guard_name' => 'bo']);

        // create roles and assign created permissions
        Role::create([
            'name'       => 'root',
            'guard_name' => 'bo',
        ])->givePermissionTo(Permission::all());

        Role::create([
            'name'       => 'admin',
            'guard_name' => 'bo',
        ])->givePermissionTo([
            'manage-users',
            'delete-users',
            'view-loans',
            'update-loans',
            'delete-loans',
            'manage-measures',
            'delete-measures',
            'manage-posts',
            'delete-posts',
            'manage-settings',
            'delete-settings',
            'manage-improvements',
            'delete-improvements',
            'manage-loaners',
            'delete-loaners',
            'view-actions',
            'delete-actions',
            'manage-loan-requests',
            'edit-loan-requests',
            'delete-loan-requests',
        ]);

        Role::create([
            'name'       => 'manager',
            'guard_name' => 'bo',
        ])->givePermissionTo([
            'view-loans',
            'manage-measures',
            'manage-posts',
            'manage-settings',
            'manage-improvements',
            'manage-loaners',
            'view-actions',
            'view-logs',
            'manage-loan-requests',
            'edit-loan-requests',
        ]);

        Role::create([
            'name'       => 'operator',
            'guard_name' => 'bo',
        ])->givePermissionTo([
            'view-loans',
            'manage-posts',
            'manage-loan-requests',
        ]);
    }
}
