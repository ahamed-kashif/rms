<?php


use App\Models\Customer;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit customer']);
        Permission::create(['name' => 'delete customer']);
        Permission::create(['name' => 'create customer']);
        Permission::create(['name' => 'index customer']);
        Permission::create(['name' => 'show customer']);
        Permission::create(['name' => 'update customer']);
        Permission::create(['name' => 'api_get customer']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
        factory(Customer::class, 10)->create();
    }
}
