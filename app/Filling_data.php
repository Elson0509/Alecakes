<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;

class Filling_data extends Model
{
    public $timestamps=false;
    
    function language(){
        return $this->belongsTo('App\Language');
    }
}
