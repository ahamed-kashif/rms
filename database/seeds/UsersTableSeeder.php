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
        $user = User::create(
            [
                'id' 		=> 	1,
                'name'	=>	'Dev',
                'email'		=>	'sahkashif@gmail.com',
                'phone_number' => '01989091217',
                'password'	=>	Hash::make('12345678')
            ]
        )->assignRole('super-admin');
        //Add root user
        $user = User::create(
            [
                'id' 		=> 	2,
                'name'	=>	'Ariful Islam',
                'email'		=>	'account@fsrel.com',
                'phone_number' => '01989091218',
                'password'	=>	Hash::make('12345678')
            ]
        )->assignRole('admin');

        $user = User::create(
            [
                'id' 		=> 	3,
                'name'	=>	'Ariful Islam',
                'email'		=>	'account@fsrel.com',
                'phone_number' => '019890912188',
                'password'	=>	Hash::make('12345678')
            ]
        )->assignRole('manager');
    }
}
