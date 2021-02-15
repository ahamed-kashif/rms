<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class FlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit flat']);
        Permission::create(['name' => 'delete flat']);
        Permission::create(['name' => 'create flat']);
        Permission::create(['name' => 'index flat']);
        Permission::create(['name' => 'show flat']);
        Permission::create(['name' => 'update flat']);
        Permission::create(['name' => 'api_get flat']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
    }
}
