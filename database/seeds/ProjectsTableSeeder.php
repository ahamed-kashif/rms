<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit project']);
        Permission::create(['name' => 'delete project']);
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'index project']);
        Permission::create(['name' => 'show project']);
        Permission::create(['name' => 'update project']);
        Permission::create(['name' => 'api_get project']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
    }
}
