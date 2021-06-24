<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsRolesAsignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pacient = Role::find(1);
        $medic = Role::find(2);
        $admin = Role::find(3);
        /*
            $permission_attend = Permission::findByName('attend_consultations');
            $permission_edit = Permission::findByName('edit_consultations');
            $permission_delete = Permission::findByName('delete_consultations');
            $permission_create = Permission::findByName('create_consultations');
            $permission_retrieve = Permission::findByName('retrieve_consultations');
            $permission_list = Permission::findByName('list_consultations');
            $pacient->givePermissionTo([$permission_attend, $permission_edit, $permission_retrieve]);
            $medic->givePermissionTo([$permission_create, $permission_edit, $permission_retrieve]);
            $admin->givePermissionTo([$permission_create, $permission_edit, $permission_retrieve, $permission_delete, $permission_list]);
        */
        $user1 = User::find(1);
        $user1->assignRole($medic);
        $user2 = User::find(2);
        $user2->assignRole($pacient);
        $user3 = User::find(3);
        $user3->assignRole($admin);
    }
}
