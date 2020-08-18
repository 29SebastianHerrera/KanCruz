<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['name','description','services','price', 'pax','available'];

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\Booking');
    }
}
