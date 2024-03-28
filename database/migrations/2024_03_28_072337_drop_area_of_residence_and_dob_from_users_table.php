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
            $table->dropColumn('area_of_residence');
            $table->dropColumn('date_of_birth');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('area_of_residence')->nullable()->after('country');
            $table->date('date_of_birth')->nullable()->after('area_of_residence');
        });
    }
};
