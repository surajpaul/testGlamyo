<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipds', function (Blueprint $table) {
            $table->id();
            $table->string('patient');
            $table->string('phone');
            $table->string('doctor_id');
            $table->string('hospital_id');
            $table->string('user_id');
            $table->string('room_id');
            $table->string('treatment_id');
            $table->date('surgery_date');
            $table->time('arrival_time');
            $table->time('treatment_time');
            $table->string('test')->nullable();
            $table->string('attendant');
            $table->string('aadhar');
            $table->string('payment_id');
            $table->string('admission_amt')->nullable();
            $table->string('discharge_amt')->nullable();
            $table->string('insurance')->nullable();
            $table->string('billed_amt')->nullable();
            $table->string('settled_amt')->nullable();
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
        Schema::dropIfExists('ipds');
    }
}
