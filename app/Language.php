<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Parallax_info;
use App\Menu_link;
use App\Footer_info;
use App\Filling;
use App\Filling_data;
use App\Price;
use App\Price_info;
use App\Card_info;

class Language extends Model
{
    public $timestamps=false;
    
    function parallax_info(){
        return $this->hasOne('App\Parallax_info');
    }
    
    public function menu_links(){
        return $this->hasMany('App\Menu_link');
    }
    
    public function footer_info(){
        return $this->hasOne('App\Footer_info');
    }
    
    public function card_infos(){
        return $this->hasMany('App\Card_info');
    }
    
    public function fillings(){
        return $this->hasMany('App\Filling');
    }
    public function filling_data(){
        return $this->hasOne('App\Filling_data');
    }
    public function prices(){
        return $this->hasMany('App\Price');
    }
    public function price_info(){
        return $this->hasOne('App\Price_info');
    }
}
