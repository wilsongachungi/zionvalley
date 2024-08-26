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
            $table->text('comment')->nullable()->after('sent_to'); // Adjust 'sent_to' to the appropriate column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('harambees', function (Blueprint $table) {
            $table->dropColumn('comment');
        });
    }
};
