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
        Spatie\Permission\Models\Permission::create(['name' => 'edit supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'create supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'index supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'show supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'update supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get supplier']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo('show supplier');
        //factory(supplier::class, 10)->create();
    }
}
