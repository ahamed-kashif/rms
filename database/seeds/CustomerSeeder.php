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
        Spatie\Permission\Models\Permission::create(['name' => 'edit customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'create customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'index customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'show customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'update customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get customer']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
//        factory(Customer::class, 10)->create();
    }
}
