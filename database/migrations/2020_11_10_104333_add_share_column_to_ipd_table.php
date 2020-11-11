<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShareColumnToIpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ipds', function (Blueprint $table) {
            $table->string('on_admission')->nullable();
            $table->string('on_discharge')->nullable();
            $table->string('doctor_share')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipds', function (Blueprint $table) {
            //
        });
    }
}
