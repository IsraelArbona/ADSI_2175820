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

        // permisos de roles
        Permission::create(['name' => 'principal.roles.index']);
        Permission::create(['name' => 'principal.roles.edit']);
        Permission::create(['name' => 'principal.roles.show']);
        Permission::create(['name' => 'principal.roles.create']);
        Permission::create(['name' => 'principal.roles.destroy']);

        // permisos de paises
        Permission::create(['name' => 'principal.paises.index']);
        Permission::create(['name' => 'principal.paises.edit']);
        Permission::create(['name' => 'principal.paises.show']);
        Permission::create(['name' => 'principal.paises.create']);
        Permission::create(['name' => 'principal.paises.destroy']);

        // permisos de dptos
        Permission::create(['name' => 'principal.dptos.index']);
        Permission::create(['name' => 'principal.dptos.edit']);
        Permission::create(['name' => 'principal.dptos.show']);
        Permission::create(['name' => 'principal.dptos.create']);
        Permission::create(['name' => 'principal.dptos.destroy']);

        // permisos de ciudades
        Permission::create(['name' => 'principal.ciudades.index']);
        Permission::create(['name' => 'principal.ciudades.edit']);
        Permission::create(['name' => 'principal.ciudades.show']);
        Permission::create(['name' => 'principal.ciudades.create']);
        Permission::create(['name' => 'principal.ciudades.destroy']);


        
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
