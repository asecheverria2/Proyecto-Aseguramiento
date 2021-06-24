<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class
        ]);
        Permission::create(['name'=>'edit_consultations']);
        Permission::create(['name'=>'attend_consultations']);
        Permission::create(['name'=>'create_consultations']);
        Permission::create(['name'=>'delete_consultations']);
        Permission::create(['name'=>'retrieve_consultations']);
        Permission::create(['name'=>'list_consultations']);
    }
}
