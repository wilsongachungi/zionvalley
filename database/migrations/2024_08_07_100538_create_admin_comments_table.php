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
		Schema::create('admin_comments', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('user_id');
			$table->text('comment'); 
			$table->timestamps();

			// Define the foreign key constraint
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	public function down(): void
	{
		Schema::dropIfExists('admin_comments');
	}
};
