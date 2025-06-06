<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::table('harambees', function (Blueprint $table) {
			$table->boolean('status')->default(false)->change();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down()
	{
		Schema::table('harambees', function (Blueprint $table) {
			// Revert the 'status' column changes
			$table->boolean('status')->change();
		});
	}
};
