<?php
//No matter the laguage, the date of the card is always the same. Therefore, it was put the date and card img separately in a table 

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Card_info;
use App\Card_img;
    
class Card extends Model
{
    public $timestamps=false;
    
    function card_infos(){
        return $this->hasMany("App\Card_info");
    }
    
    function card_imgs(){
        return $this->hasMany("App\Card_img");
    }
}
