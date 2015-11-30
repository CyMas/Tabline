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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('username')->unique();
			$table->string('password', 60);
			$table->enum('type', ['user','admin']);
			$table->enum('jenisKelamin', ['Laki-laki','Perempuan']);
			$table->string('ttl');
			$table->string('alamat');
			$table->string('no_tlp',25);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
