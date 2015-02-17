<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Initialize extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('users', function(Blueprint $table) {
          $table->bigIncrements('id')->unsigned();
          $table->string('username')->unique();
          $table->string('password');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('remember_token', 100)->nullable();
          $table->timestamps();
          $table->softDeletes();
          $table->engine = 'InnoDB';
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
      Schema::table('users', function(Blueprint $table) {
          $table->drop();
      });
  }
}
