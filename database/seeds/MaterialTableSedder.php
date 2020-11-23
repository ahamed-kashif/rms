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
        Permission::create(['name' => 'edit metarial']);
        Permission::create(['name' => 'delete metarial']);
        Permission::create(['name' => 'create metarial']);
        Permission::create(['name' => 'index metarial']);
        Permission::create(['name' => 'show metarial']);
        Permission::create(['name' => 'update metarial']);
        Permission::create(['name' => 'api_get metarial']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
        factory(Material::class, 100)->create();
    }
}
