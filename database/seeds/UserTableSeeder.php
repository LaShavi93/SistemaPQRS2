<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;
use Faker\Factory as FKR;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        //$faker = FKR::create('App/Users');
        $faker = Faker\Factory::create('es_PE'); // create a Peruan faker

        $role_admin = Role::where('name', 'admin')->first();
        $role_gerente = Role::where('name', 'gerente')->first();
        $role_parametrizador = Role::where('name', 'parametrizador')->first();
        $role_funcionario = Role::where('name', 'funcionario')->first();
        $role_cliente = Role::where('name', 'cliente')->first();


		//Rol de Administrador: Todos los privilegios.
        $admin = new User();
        $admin->first_name = 'Admin';
        $admin->last_name = 'Usuario';
        $admin->phone = $faker->phoneNumber;
        $admin->email = 'admin@example.com';
        //$admin->password = bcrypt('secret');
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        //Gerente: Puede revisar datos y crear usuarios.        
        $gerente = new User();
        $gerente->first_name = 'Gerente';
        $gerente->last_name = 'Usuario';
        $gerente->phone = $faker->phoneNumber;
        $gerente->email = 'gerente@example.com';
        //$gerente->password = bcrypt('secret');
        $gerente->password = bcrypt('123456');
        $gerente->save();
        $gerente->roles()->attach($role_gerente);

        //Rol de Parametrizador: Solo pede acceder al CRUD del sistema.
        $parametrizador = new User();
        $parametrizador->first_name = 'Parametrizador';
        $parametrizador->last_name = 'Usuario';
        $parametrizador->phone = $faker->phoneNumber;
        $parametrizador->email = 'parametrizador@example.com';
        //$parametrizador->password = bcrypt('secret');
        $parametrizador->password = bcrypt('123456');
        $parametrizador->save();
        $parametrizador->roles()->attach($role_parametrizador);

        //Rol de Funcionario: Solo puede gestionar los PQRS.
        $funcionario = new User();
        $funcionario->first_name = 'Funcionario';
        $funcionario->last_name = 'Usuario';
        $funcionario->phone = $faker->phoneNumber;
        $funcionario->email = 'funcionario@example.com';
        //$funcionario->password = bcrypt('secret');
        $funcionario->password = bcrypt('123456');
        $funcionario->save();
        $funcionario->roles()->attach($role_funcionario);

        //Cliente/Afiliado: Solo puede crear solicitudes, recibir respuestas y replicar la respuesta.
        $cliente = new User();
        $cliente->first_name = 'Cliente';
        $cliente->last_name = 'Usuario';
        $cliente->phone = $faker->phoneNumber;
        $cliente->email = 'cliente@example.com';
        //$cliente->password = bcrypt('secret');
        $cliente->password = bcrypt('123456');
        $cliente->save();
        $cliente->roles()->attach($role_cliente);
    }
}
