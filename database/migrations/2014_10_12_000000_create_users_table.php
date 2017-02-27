<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('enabled');
			$table->integer('persona_id')->unsigned();
			$table->integer('rol_id')->unsigned();
			$table->foreign('persona_id')->references('id')->on('persona');
			$table->foreign('rol_id')->references('id')->on('rol');
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario');
	}

}
