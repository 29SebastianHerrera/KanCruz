<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=['name','description'];
    
    public function rooms(){
        return $this->belongsToMany('App\Room');
    }
}
