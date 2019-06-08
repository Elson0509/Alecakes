<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;

class Price extends Model
{
    public $timestamps=false;
    protected $primarykey=['language_id', 'size'];
    public $incrementing=false;
    
    public function language(){
        return $this->belongsTo('App\Language');
    }
}
