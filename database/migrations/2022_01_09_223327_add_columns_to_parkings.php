<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToParkings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parkings', function (Blueprint $table) {
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parkings', function (Blueprint $table) {
            $table->removeColumn('start');
            $table->removeColumn('end');
        });
    }
}
