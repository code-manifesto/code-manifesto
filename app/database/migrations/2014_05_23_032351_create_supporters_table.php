<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	        Schema::create('supporters', function($table)
	        {
	            $table->increments('id');
	            $table->string('first_name');
	            $table->string('last_name');
	            $table->string('email');
	            $table->string('twitter_user')->nullable();
	            $table->string('github_user')->nullable();
	            $table->string('city')->nullable();
	            $table->string('state')->nullable();
	            $table->string('country')->nullable();
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
	        Schema::drop('supporters');
	}

}
