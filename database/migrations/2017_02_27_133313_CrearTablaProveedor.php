<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProveedor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedor', function(Blueprint $table)
		{
			$table->integer('persona_id');
			$table->string('nombre_empresa');
			$table->string('nit');
			$table->integer('telefono_empresa',15);
			$table->integer('enabled');
			$table->timestamps();
			$table->foreign('persona_id')->references('id')->on('persona');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedor');
	}

}
