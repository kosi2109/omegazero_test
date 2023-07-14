<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'department_name' => 'IT',
            'password' => 'adminadmin',
            'email' => 'superadmin@gmail.com'
        ]);

        \App\Models\User::factory(100)->create();

        $admin_role = Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Employee']);

        Permission::create(['name' => 'view_users']);
        Permission::create(['name' => 'create_users']);
        Permission::create(['name' => 'edit_users']);
        Permission::create(['name' => 'delete_users']);

        $admin_role->givePermissionTo(['view_users', 'create_users', 'edit_users', 'delete_users']);

        $admin->assignRole('Admin');
    }
}
