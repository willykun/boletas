<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('f_name')->nullable();
			$table->string('s_name')->nullable();
			$table->string('f_lastname')->nullable();
			$table->string('s_lastname')->nullable();
			$table->integer('CI')->required();
			$table->string('username')->required();
			$table->boolean('active')->required();
			$table->date('contract_date')->required();
			$table->string('role')->required();
			$table->integer('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('school_name')->nullable();
			$table->integer('school_id')->unsigned();
			$table->foreign('school_id')->references('id')->on('schools');
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
		Schema::drop('professors');
	}

}
