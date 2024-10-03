<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'create details']);
        Permission::create(['name' => 'edit details']);
        Permission::create(['name' => 'see details']);
        
        // Create roles and assign created permissions
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $agentRole = Role::create(['name' => 'client']);

        $adminRole->givePermissionTo([ 'create details']);

        
        
        // $agentRole->givePermissionTo(['create details', 'edit details']);
    }
}
