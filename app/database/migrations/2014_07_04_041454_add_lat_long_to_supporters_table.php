<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLatLongToSupportersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('supporters', function(Blueprint $table)
		{
			$table->float('latitude')->after('country');
			$table->float('longitude')->after('latitude');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('supporters', function(Blueprint $table)
		{
			$table->dropColumn('latitude');
			$table->dropColumn('longitude');
		});
	}

}
