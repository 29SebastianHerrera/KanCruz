<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['name','description', 'price'];

    public function bookings()
    {
        return $this->belongsToMany('App\Booking');
    }
}
