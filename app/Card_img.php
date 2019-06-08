<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Card;

class Card_img extends Model
{
    public $timestamps=false;
    
    function card(){
        return $this->belongsTo('App\Card');
    }
}
