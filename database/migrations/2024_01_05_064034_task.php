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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('description');
            $table->text('message')->nullable();
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
