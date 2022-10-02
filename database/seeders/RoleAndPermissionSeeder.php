<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'create-blog-posts']);
        Permission::create(['name' => 'edit-blog-posts']);
        Permission::create(['name' => 'delete-blog-posts']);

        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'User']);

        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-pharmacy',
            'edit-pharmacy',
            'delete-pharmacy',
        ]);

        $editorRole->givePermissionTo([
            'create-pharmacy',
            'edit-pharmacy',
            'delete-pharmacy',
        ]);





        $user = User::first();

        $user->assignRole('Admin');



        $role = Role::findByName('Admin');

        $role->givePermissionTo('edit-users');


        $user = User::first();

        $user->givePermissionTo('edit-users');
    }
}
