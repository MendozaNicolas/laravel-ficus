<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(["name"=> "Admin"]);
        $role2 = Role::create(["name"=> "User"]);

        Permission::create(['name' => 'admin.user.all'])->assignRole($role1);
        Permission::create(['name' => 'admin.role.all'])->assignRole($role1);
        Permission::create(['name' => 'admin.permission.all'])->assignRole($role1);


    }
}
