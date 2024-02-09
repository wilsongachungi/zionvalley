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
		Schema::create('downloads', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('file_path');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('downloads');
	}
};
