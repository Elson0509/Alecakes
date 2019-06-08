<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;

class Parallax_info extends Model
{
    public $timestamps=false;
    protected $primarykey='language_id';
    public $incrementing=false;
    
    function language(){
        return $this->belongsTo('App\Language');
    }
}
