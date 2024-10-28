<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $memberRole = Role::create(['name' => 'Member']);

        // Create permissions
        Permission::create(['name' => 'manage members']);
        Permission::create(['name' => 'manage loans']);
        Permission::create(['name' => 'view contributions']);
        Permission::create(['name' => 'view assets']);
        Permission::create(['name' => 'manage finances']);
        Permission::create(['name' => 'manage payroll']);

        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        $memberRole->givePermissionTo(['view contributions', 'view assets']);
    }
}
