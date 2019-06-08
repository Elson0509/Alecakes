<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;
use App\Card;

class Card_info extends Model
{
    public $timestamps=false;
    public $incrementing=false;
    protected $primaryKey=['card_id', 'language_id'];
    
    function language(){
        return $this->belongsTo('App\Language');
    }
    
    function card(){
        return $this->belongsTo('App\Card');
    }
}
