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
        Spatie\Permission\Models\Permission::create(['name' => 'edit flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'create flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'index flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'show flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'update flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get flat']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
    }
}
