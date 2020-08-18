<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTagTable extends Migration
{
    public function up()
    {
        Schema::create('room_tag', function (Blueprint $table) {
            $table->foreignId('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->foreignId('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    public function down()
    {
        Schema::dropIfExists('room_tag');
    }
}
