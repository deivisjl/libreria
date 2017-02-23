<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use LibreriaControl\User;
use LibreriaControl\Rol;
use LibreriaControl\Persona;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		//Model::unguard();
		User::truncate();
		Rol::truncate();
		Persona::truncate();

		$this->call('UsuarioSeeder');
	}

}
