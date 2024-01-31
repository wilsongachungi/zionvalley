<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::table('users', function (Blueprint $table) {
			$table->string('country')->after('phone');
			$table->date('date_of_birth')->after('address')->nullable();
			$table->renameColumn('address', 'area_of_residence');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('users', function (Blueprint $table) {
			$table->renameColumn('area_of_residence', 'address');
			$table->dropColumn('date_of_birth');
			$table->dropColumn('country');
		});
	}
};
