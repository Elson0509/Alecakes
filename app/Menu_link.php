<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;

class Menu_link extends Model
{
    public $timestamps=false;
    
    function language(){
        return $this->belongsTo('App\Language');
    }
}
