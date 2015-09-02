<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdfsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pdfs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('a')->nullable();
			$table->string('b')->nullable();
			$table->string('c')->nullable();
			$table->string('d')->nullable();
			$table->string('e')->nullable();
			$table->string('f')->nullable();
			$table->string('g')->nullable();
			$table->string('h')->nullable();
			$table->string('i')->nullable();
			$table->string('j')->nullable();
			$table->string('k')->nullable();
			$table->string('l')->nullable();
			$table->string('m')->nullable();
			$table->string('n')->nullable();
			$table->string('o')->nullable();
			$table->string('p')->nullable();
			$table->string('q')->nullable();
			$table->string('r')->nullable();
			$table->string('s')->nullable();
			$table->string('t')->nullable();
			$table->string('u')->nullable();
			$table->string('v')->nullable();
			$table->string('w')->nullable();
			$table->string('x')->nullable();
			$table->string('y')->nullable();
            $table->string('z')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pdfs');
	}

}
