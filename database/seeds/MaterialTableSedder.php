<?php

use App\Models\Material;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MaterialTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spatie\Permission\Models\Permission::create(['name' => 'edit material']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete material']);
        Spatie\Permission\Models\Permission::create(['name' => 'create material']);
        Spatie\Permission\Models\Permission::create(['name' => 'index material']);
        Spatie\Permission\Models\Permission::create(['name' => 'show material']);
        Spatie\Permission\Models\Permission::create(['name' => 'update material']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get material']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        //factory(Material::class, 10)->create();
    }
}
