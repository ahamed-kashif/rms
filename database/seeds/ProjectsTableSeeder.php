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
        Spatie\Permission\Models\Permission::create(['name' => 'edit project']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete project']);
        Spatie\Permission\Models\Permission::create(['name' => 'create project']);
        Spatie\Permission\Models\Permission::create(['name' => 'index project']);
        Spatie\Permission\Models\Permission::create(['name' => 'show project']);
        Spatie\Permission\Models\Permission::create(['name' => 'update project']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get project']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
    }
}
