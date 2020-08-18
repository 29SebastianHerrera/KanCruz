<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = ['id', 'timestamps'];
    protected $fillable=['checkin', 'checkout', 'pax', 'client_id'];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }
}
