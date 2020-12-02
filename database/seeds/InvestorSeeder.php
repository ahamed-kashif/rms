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

        Permission::create(['name' => 'edit investor']);
        Permission::create(['name' => 'delete investor']);
        Permission::create(['name' => 'create investor']);
        Permission::create(['name' => 'index investor']);
        Permission::create(['name' => 'show investor']);
        Permission::create(['name' => 'update investor']);
        Permission::create(['name' => 'api_get investor']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
        factory(Investor::class, 10)->create();
    }
}
