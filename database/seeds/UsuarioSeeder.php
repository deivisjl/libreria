<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use LibreriaControl\User;
use LibreriaControl\Rol;
use LibreriaControl\Persona;

class UsuarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Persona::create(
			[
				'nombres' => "Nombreadmin",
				'apellidos' => "Apellidoadmin",
				'genero' => "M",
				'telefono' => 7885,
				'direccion' => "direccionAdmin",
				'ciudad' => "ciudadAdmin"
			]);
		Rol::create(
			[
				'nombre_rol' => "Administrador"
			]);

			[
				'email' => "admin",
				'password' => bcrypt("12345"),
				'enabled' => 1,
				'persona_id' => 1,
				'rol_id' => 1
			]);


	}

}
