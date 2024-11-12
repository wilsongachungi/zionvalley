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
		Schema::create('phone_info', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('user_id');  // Foreign key to users table
			$table->boolean('is_whatsapp')->default(false);  // Stores WhatsApp status
			$table->boolean('is_mpesa')->default(false);  // Stores M-Pesa status
			$table->enum('category', ['Financial Supporter', 'CBO Member', 'CBO Land Owner', 'Employee']); // Category
			$table->timestamps();

			// Add foreign key constraint to link user_id with users table
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::dropIfExists('phone_info');
	} 
};
