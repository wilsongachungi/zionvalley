<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToHarambees extends Migration
{
	public function up()
	{
		Schema::table('harambees', function (Blueprint $table) {
			$table->unsignedBigInteger('user_id')->after('harambees');

			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::table('harambees', function (Blueprint $table) {
			$table->dropColumn('user_id');
		});
	}
}
