<?php

use App\Models\Contractor;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ContractorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spatie\Permission\Models\Permission::create(['name' => 'edit contractor']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete contractor']);
        Spatie\Permission\Models\Permission::create(['name' => 'create contractor']);
        Spatie\Permission\Models\Permission::create(['name' => 'index contractor']);
        Spatie\Permission\Models\Permission::create(['name' => 'show contractor']);
        Spatie\Permission\Models\Permission::create(['name' => 'update contractor']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get contractor']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        //factory(Contractor::class, 10)->create();
    }
}
