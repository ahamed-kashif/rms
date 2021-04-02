<?php

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit supplier']);
        Permission::create(['name' => 'delete supplier']);
        Permission::create(['name' => 'create supplier']);
        Permission::create(['name' => 'index supplier']);
        Permission::create(['name' => 'show supplier']);
        Permission::create(['name' => 'update supplier']);
        Permission::create(['name' => 'api_get supplier']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo('show supplier');
        //factory(supplier::class, 10)->create();
    }
}
