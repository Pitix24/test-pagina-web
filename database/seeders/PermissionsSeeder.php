<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'Administrador']);
        $role->syncPermissions("administrar");
        // create user
        $user1= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'names' => 'Anthony Robert',
            'password' => Hash::make('sdc123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'admin@gmail.com',
        ]);
        //asignar rol
        $user1->assignRole('Administrador');
        ///////////////////////////////////////////////////////////////////////
        Permission::create(['name' => 'programar']);
        $role = Role::create(['name' => 'Coordinación']);
        $role->syncPermissions("programar");
        // create user
        $user2= User::create([
            'dni' => '44444444',
            'firstname' => 'Tejada',
            'lastname' => 'Salguero',
            'names' => 'Maria Tejada',
            'password' => Hash::make('sdc123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'fb' => 'https://www.youtube.com/watch?v=Au8mW-Ps2e8',
            'youtube' => 'https://www.youtube.com/watch?v=Au8mW-Ps2e8',
            'github' => 'https://www.youtube.com/watch?v=Au8mW-Ps2e8',
            'instagram' => 'https://www.youtube.com/watch?v=Au8mW-Ps2e8',
            'portfolio' => 'https://www.youtube.com/watch?v=Au8mW-Ps2e8',
            
            'email' => 'coordinacion@gmail.com',
        ]);
          //asignar rol
        $user2->assignRole('Coordinación');
////////////////////
Permission::create(['name' => 'Dictar']);
$role = Role::create(['name' => 'Coach']);
$role->syncPermissions("Dictar");
//

// create user
$user3= User::create([
    'dni' => '44444444',
    'firstname' => 'Cardenas',
    'lastname' => 'Aquino',
    'names' => 'Anthony Robert',
    'password' => Hash::make('sdc123456'),
    'datebirth' => '2000-10-10',
    'cellphone' => '999999999',
    'sex' => 'M',
    'email' => 'logicainformatica18@gmail.com',
]);
//
$user3->assignRole('Coach');
//
Permission::create(['name' => 'Apoyar']);
$role = Role::create(['name' => 'Asistente']);
$role->syncPermissions("Apoyar");
$user3->assignRole('Asistente');

///////////////////////////////////////////////
////////////////////
Permission::create(['name' => 'Aprender']);
$role = Role::create(['name' => 'Socio Comercial']);
$role->syncPermissions("Aprender");
// create user
$user4= User::create([
    'dni' => '44444444',
    'firstname' => 'Aquino',
    'lastname' => 'Bullon',
    'names' => 'Jorge Luis',
    'password' => Hash::make('sdc123456'),
    'datebirth' => '2000-10-10',
    'cellphone' => '999999999',
    'sex' => 'M',
    'email' => 'aquinobullonjorgelui@gmail.com',
]);
$user4->assignRole('Socio Comercial');

    }

}
