<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Spatie\Permission\Models\Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Spatie\Permission\Models\Permission::all());

        $role = Spatie\Permission\Models\Role::create(['name' => 'admin']);
        $role->givePermissionTo(Spatie\Permission\Models\Permission::all());

        $role = Spatie\Permission\Models\Role::create(['name' => 'manager']);
        $role->givePermissionTo(Spatie\Permission\Models\Permission::whereNotIn('name',['delete project','delete invoice','delete customer','create salary','delete employee','create employee','index employee','show employee','update employee','api_get employee'])->get());
        //Add root user
        $user = User::findOrFail(1)->assignRole('super-admin');
        $user = User::findOrFail(2)->assignRole('admin');
        $user = User::findOrFail(3)->assignRole('manager');

    }
}
