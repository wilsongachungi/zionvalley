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
			$table->renameColumn('user_id', 'sent_to');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('harambees', function (Blueprint $table) {
			$table->renameColumn('sent_to', 'user_id');
		});
	}
};
