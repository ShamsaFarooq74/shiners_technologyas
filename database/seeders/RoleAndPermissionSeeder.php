<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // Create a new role called "admin"
         $adminRole = Role::create(['name' => 'admin']);

         // Create permissions and assign them to the "admin" role
         $permissions = [
             'create',
             'edit',
             'delete',
             'view',
             // add more permissions as needed
         ];

         foreach ($permissions as $permissionName) {
             $permission = Permission::create(['name' => $permissionName]);
             $adminRole->givePermissionTo($permission);
         }

         // Create a new role called "writer"
         $writerRole = Role::create(['name' => 'writer']);

          // array of permissions for writer
          $permissions = [
            'create',
            'edit',
            'view',
            // add more permissions as needed
        ];

        foreach ($permissions as $permission) {
           // $permission = Permission::create(['name' => $permissionName]);
            $writerRole->givePermissionTo($permission);
        }
    }

}
