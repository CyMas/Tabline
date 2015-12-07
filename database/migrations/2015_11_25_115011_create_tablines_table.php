<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tablines', function(Blueprint $table)
		{
			$table->increments('id');
				$table->string('nama');
				$table->string('tmplhr');
				$table->string('tgllhr');
				$table->string('jk');
				$table->text('alamat');
				$table->string('kode');
				$table->string('email');
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
		Schema::drop('tablines');
	}

}
