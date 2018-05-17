<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //Rol de Administrador: Todos los privilegios.
        $role = new \App\Role();
        $role->name = 'admin';
        $role->description = 'Todos los privilegios';
        $role->save();

        //Gerente: Puede revisar datos y crear usuarios.
		$role = new \App\Role();
        $role->name = 'gerente';
        $role->description = 'Puede revisar datos y crear usuarios';
        $role->save();

        //Rol de Parametrizador: Solo pede acceder al CRUD del sistema.
		$role = new \App\Role();
        $role->name = 'parametrizador';
        $role->description = 'Solo pede acceder al CRUD del sistema';
        $role->save();
        
        //Rol de Funcionario: Solo puede gestionar los PQRS.
        $role = new \App\Role();
        $role->name = 'funcionario';
        $role->description = 'Solo puede gestionar los PQRS';
        $role->save();

        //Cliente/Afiliado: Solo puede crear solicitudes, recibir respuestas y replicar la respuesta.
        $role = new \App\Role();
        $role->name = 'cliente';
        $role->description = 'Solo puede crear solicitudes, recibir respuestas y replicar la respuesta';
        $role->save();
    }
}
