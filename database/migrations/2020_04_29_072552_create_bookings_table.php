<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    // relacion con user (email, telefono, name) + relacion con habitación.
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id('id');
            $table->date('checkin');
            $table->date('checkout');
            $table->tinyInteger('pax');
;
=======
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('document');
            $table->string('email');
            $table->string('phone');
            $table->date('checkin');
            $table->date('checkout');
            $table->boolean('breakfast')->default(0);
            $table->boolean('pets')->default(0);
            $table->foreignId('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');

            //$table->integer('pets_number')->nullable();
>>>>>>> Code review Calendar: unsuccessfully api route stuff
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
