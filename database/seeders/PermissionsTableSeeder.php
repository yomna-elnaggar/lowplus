<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Repository;
use Illuminate\Database\Seeder;
use App\Models\CategoryPermission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dashboard
        $permissions = [
            'dashboard.index', 'dashboard.backup'
        ];
        $category = CategoryPermission::firstOrCreate(['name' => 'dashboard', 'order' => 1]);
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'category_permission_id' => $category->id]);
        }

        // roles
        $permissions = [
            'roles.index', 'roles.create', 'roles.edit'
        ];
        $category = CategoryPermission::firstOrCreate(['name' => 'roles', 'order' => 1]);
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'category_permission_id' => $category->id]);
        }

        // for super admin
        $permissions_super_admin = Permission::get();
        $super_admin_role = Role::firstOrCreate(['name' => 'superAdmin']);
        $super_admin_role->syncPermissions($permissions_super_admin);

        $super_admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name'  => 'admin', 'password' => bcrypt('123456')]
        );

        $super_admin->assignRole([]);
        $super_admin->assignRole($super_admin_role);

        Role::firstOrCreate(['name' => 'mandob']);
    }
}
