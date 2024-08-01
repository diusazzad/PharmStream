<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }

    public function run()
    {
        $this->resetCachedPermissions();
        $this->createPermissions();
        $this->createRolesWithPermissions();
    }

    private function resetCachedPermissions()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    }

    private function createPermissions()
    {
        $permissionNames = [
            // Sales Permissions
            'view-sales', 'create-sale', 'destroy-sale', 'edit-sale',
            // Reports Permissions
            'view-reports',
            // ... (rest of your permission names) ...
        ];

        $permissions = collect($permissionNames)->map(function ($name) {
            return ['name' => $name, 'guard_name' => 'web'];
        });

        Permission::insert($permissions->toArray());
    }

    private function createRolesWithPermissions()
    {
        $salesPersonRole = Role::create(['name' => 'sales-person']);
        $salesPersonRole->givePermissionTo(['view-sales', 'view-reports', 'create-sale']);

        $superAdminRole = Role::create(['name' => 'super-admin']);
        $superAdminRole->givePermissionTo(Permission::all());
    }

}
