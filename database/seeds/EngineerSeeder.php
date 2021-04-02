<?php



use App\Models\Engineer;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class EngineerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit engineer']);
        Permission::create(['name' => 'delete engineer']);
        Permission::create(['name' => 'create engineer']);
        Permission::create(['name' => 'index engineer']);
        Permission::create(['name' => 'show engineer']);
        Permission::create(['name' => 'update engineer']);
        Permission::create(['name' => 'api_get engineer']);
        Role::findByName('super-admin')->givePermissionTo(Permission::all());
        Role::findByName('admin')->givePermissionTo(Permission::all());
        //factory(Engineer::class, 10)->create();
    }
}
