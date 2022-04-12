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
        Spatie\Permission\Models\Permission::create(['name' => 'edit invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'create invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'index invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'show invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'update invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get invoice']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
    }
}
