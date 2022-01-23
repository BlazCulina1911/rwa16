<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //TODO smisli neku šemu za Rezervacijsku tablu

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->boolean('result');
            $table->boolean('expired');
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
        Schema::dropIfExists('reservations');
    }
}
