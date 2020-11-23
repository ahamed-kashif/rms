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
        Permission::create(['name' => 'edit material']);
        Permission::create(['name' => 'delete material']);
        Permission::create(['name' => 'create material']);
        Permission::create(['name' => 'index material']);
        Permission::create(['name' => 'show material']);
        Permission::create(['name' => 'update material']);
        Permission::create(['name' => 'api_get material']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
        factory(Material::class, 100)->create();
    }
}
