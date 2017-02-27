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
		Persona::create(
			[
				'nombres' => "Nombredigitador",
				'apellidos' => "Apellidodigitador",
				'genero' => "M",
				'telefono' => 7885,
				'direccion' => "direccionDigitador",
				'ciudad' => "ciudadDigitador"
			]);
		Persona::create(
			[
				'nombres' => "NombreVendedor",
				'apellidos' => "ApellidoVendedor",
				'genero' => "M",
				'telefono' => 7885,
				'direccion' => "direccionVendedor",
				'ciudad' => "ciudadVendedor"
			]);

		Rol::create(
			[
				'nombre_rol' => "Administrador"
			]);
		Rol::create(
			[
				'nombre_rol' => "Digitador"
			]);
		Rol::create(
			[
				'nombre_rol' => "Vendedor"
			]);

		User::create(
			[
				'email' => "admin@gmail.com",
				'password' => bcrypt("12345"),
				'enabled' => 1,
				'persona_id' => 1,
				'rol_id' => 1
			]);
		User::create(
			[
				'email' => "digitador@gmail.com",
				'password' => bcrypt("12345"),
				'enabled' => 1,
				'persona_id' => 2,
				'rol_id' => 2
			]);
		User::create(
			[
				'email' => "vendedor@gmail.com",
				'password' => bcrypt("12345"),
				'enabled' => 1,
				'persona_id' => 3,
				'rol_id' => 3
			]);


	}

}
