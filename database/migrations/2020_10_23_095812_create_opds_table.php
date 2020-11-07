<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opds', function (Blueprint $table) {
            $table->id();
            $table->string('patient');
            $table->string('phone');
            $table->string('doctor_id');
            $table->string('hospital_id');
            $table->string('user_id');
            $table->string('treatment_id');
            $table->string('fee');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('billed_amt')->nullable();
            $table->string('hospital_share')->nullable();
            $table->string('glamyo_share')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opds');
    }
}
