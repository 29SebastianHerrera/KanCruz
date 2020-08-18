<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRoomTable extends Migration
{
    public function up()
    {
        Schema::create('booking_room', function (Blueprint $table) {
            $table->foreignId('booking_id');
            $table->foreign('booking_id')->references('id')->on('bookings');

            $table->foreignId('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_room');
    }
}
