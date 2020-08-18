<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingServiceTable extends Migration
{

    public function up()
    {
        Schema::create('booking_service', function (Blueprint $table) {
            $table->foreignId('booking_id');
            $table->foreign('booking_id')->references('id')->on('bookings');

            $table->foreignId('service_id');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_service');
    }
}
