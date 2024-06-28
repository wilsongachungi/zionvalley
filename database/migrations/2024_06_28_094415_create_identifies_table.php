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
		Schema::create('identifies', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('user_id'); // Foreign key to the users table
			$table->text('identify_data'); // Column to store the identity data
			$table->timestamps();

			// Define the foreign key constraint
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('identifies');
	}
};
