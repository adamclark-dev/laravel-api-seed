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
        	Schema::create('users', function($t) {
        	        $t->increments('id');
                	$t->string('email', 250);
                    $t->string('firstname', 75);
                    $t->string('surname', 75);
                	$t->string('password', 64);
               		$t->timestamps();
                    $t->softDeletes();
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
