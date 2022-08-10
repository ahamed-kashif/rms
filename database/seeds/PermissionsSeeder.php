<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
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
        Spatie\Permission\Models\Permission::create(['name' => 'edit customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'create customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'index customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'show customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'update customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get customer']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'create engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'index engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'show engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'update engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'create flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'index flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'show flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'update flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get flat']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'create investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'index investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'show investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'update investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get investor']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'create invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'index invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'show invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'update invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get invoice']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit material']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete material']);
        Spatie\Permission\Models\Permission::create(['name' => 'create material']);
        Spatie\Permission\Models\Permission::create(['name' => 'index material']);
        Spatie\Permission\Models\Permission::create(['name' => 'show material']);
        Spatie\Permission\Models\Permission::create(['name' => 'update material']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get material']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit project']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete project']);
        Spatie\Permission\Models\Permission::create(['name' => 'create project']);
        Spatie\Permission\Models\Permission::create(['name' => 'index project']);
        Spatie\Permission\Models\Permission::create(['name' => 'show project']);
        Spatie\Permission\Models\Permission::create(['name' => 'update project']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get project']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'create supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'index supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'show supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'update supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get supplier']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete employee']);
        Spatie\Permission\Models\Permission::create(['name' => 'create employee']);
        Spatie\Permission\Models\Permission::create(['name' => 'index employee']);
        Spatie\Permission\Models\Permission::create(['name' => 'show employee']);
        Spatie\Permission\Models\Permission::create(['name' => 'update employee']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get employee']);
        Spatie\Permission\Models\Permission::create(['name' => 'create salary']);
        Spatie\Permission\Models\Permission::create(['name' => 'store salary']);
        Spatie\Permission\Models\Permission::create(['name' => 'edit salary']);
        Spatie\Permission\Models\Permission::create(['name' => 'update salary']);
    }
}
