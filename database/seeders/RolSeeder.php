<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role1 = Role::create(['name' => 'usuer']);
        $role2 = Role::create(['name' => 'teacher']);
        $role3 = Role::create(['name' => 'staff']);
        Permission::create(['name' => 'admin.dashboard'])->assignRole($role);

        Permission::create(['name' => 'admin.users.index'])->assignRole($role);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($role);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role);


    }
}
