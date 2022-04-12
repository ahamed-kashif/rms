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
        Spatie\Permission\Models\Permission::create(['name' => 'edit engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'delete engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'create engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'index engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'show engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'update engineer']);
        Spatie\Permission\Models\Permission::create(['name' => 'api_get engineer']);
        Spatie\Permission\Models\Role::findByName('super-admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        Spatie\Permission\Models\Role::findByName('admin')->givePermissionTo(Spatie\Permission\Models\Permission::all());
        //factory(Engineer::class, 10)->create();
    }
}
