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
        Schema::table('harambees', function (Blueprint $table) {
            // Check if `user_id` exists before renaming it
            if (Schema::hasColumn('harambees', 'user_id')) {
                // Rename the column and set it as a foreign key
                $table->renameColumn('user_id', 'sent_to');
                $table->foreign('sent_to')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('harambees', function (Blueprint $table) {
            // Check if `sent_to` exists before renaming it back
            if (Schema::hasColumn('harambees', 'sent_to')) {
                // Drop the foreign key constraint
                $table->dropForeign(['sent_to']);
                // Rename the column back to `user_id`
                $table->renameColumn('sent_to', 'user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }
};
