<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // permiso modulo principal
        Permission::create(['name' => 'principal']);

        // permisos de usuarios
        Permission::create(['name' => 'principal.users.index']);
        Permission::create(['name' => 'principal.users.edit']);
        Permission::create(['name' => 'principal.users.show']);
        Permission::create(['name' => 'principal.users.create']);
        Permission::create(['name' => 'principal.users.destroy']);

        // crear roles
        $admins = Role::create (['name' => 'Administrador-Super']);
        $admin = Role::create (['name' => 'Administrador']);

        // Asignar permisos al rol administrador-Super
        $admins->givePermissionTo(Permission::all());

        $user = User::find(1);
        $user->assignRole('Administrador-Super');

        $user = User::find(2);
        $user->assignRole('Administrador');

        $admin->givePermissionTo([
            'principal',
            'principal.users.index'
        ]);






    }
}
