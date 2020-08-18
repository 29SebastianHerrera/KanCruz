<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function bookings()
    {
      return $this->hasMany(Booking::class);
    }
}
