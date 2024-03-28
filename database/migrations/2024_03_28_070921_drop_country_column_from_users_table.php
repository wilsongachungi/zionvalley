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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable()->after('area_of_residence');
        });
    }
};