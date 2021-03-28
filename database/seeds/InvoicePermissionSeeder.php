<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InvoicePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit invoice']);
        Permission::create(['name' => 'delete invoice']);
        Permission::create(['name' => 'create invoice']);
        Permission::create(['name' => 'index invoice']);
        Permission::create(['name' => 'show invoice']);
        Permission::create(['name' => 'update invoice']);
        Permission::create(['name' => 'api_get invoice']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
    }
}
