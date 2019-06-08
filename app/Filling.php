<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;

class Filling extends Model
{
    public $timestamps = false;
    
    public function language(){
        return $this->belongsTo('App\Language');
    }
}
