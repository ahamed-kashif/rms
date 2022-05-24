<?php

use App\Models\Investor;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Spatie\Permission\Models\Permission::create(['name' => 'edit investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'create investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'index investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'show investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'update investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get investor']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        //factory(Investor::class, 10)->create();
    }
}
