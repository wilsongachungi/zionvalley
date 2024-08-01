<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up()
	{
		Schema::table('images', function (Blueprint $table) {
			$table->unique(['passport']);
		});
	}

	public function down()
	{
		Schema::table('images', function (Blueprint $table) {
			$table->dropUnique(['passport']);
		});
	}
};
