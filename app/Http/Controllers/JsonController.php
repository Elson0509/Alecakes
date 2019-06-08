<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Card_img;
use App\Card_info;
use App\Carousel_img;
use App\Footer_info;
use App\Language;
use App\Menu_link;
use App\Parallax_info;

/*
 Class created to control ajax requests from the page, specialy about translations
*/

class JsonController extends Controller
{
    public $standardLanguage='en';
    
    public function mainLanguage($lg){

        //Seeing if the language exists in the database
        if(Language::where('language',$lg)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['card_infos','menu_links','parallax_info','footer_info'])->where('language',$lg)->first();
            foreach($info_about_language->card_infos as $ci){
                $ci->href='/'.$lg.'/cake/'.$ci->card_id;
            }
            $info_about_language->index_link = "/".$lg;
            return json_encode($info_about_language);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage);
        }

    }
    
    public function fillingsLanguage($lg){
        //Seeing if the language exists in the database
        if(Language::where('language',$lg)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['menu_links','footer_info', 'fillings', 'filling_data'])->where('language',$lg)->first();
            //putting other language properties to be used in language selector in top menu
            $info_about_language->index_link='/'.$lg;
            return json_encode($info_about_language);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage.'/fillings');
        }
        
       
    }
    public function priceLanguage($lg){
        //Seeing if the language exists in the database
        if(Language::where('language',$lg)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['menu_links','footer_info', 'prices', 'price_info'])->where('language',$lg)->first();
            //putting other language properties to be used in language selector in top menu
            $info_about_language->index_link='/'.$lg;
            return json_encode($info_about_language);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage.'/fillings');
        }
    }
    
    public function cakeLanguage($lg, $id){

        if(Language::where('language',$lg)->exists() && Card::where('id',$id)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['menu_links','footer_info'])->where('language',$lg)->first();
            $cake = $info_about_language->card_infos()->where('card_id',$id)->first();
            $cake->card;
            return json_encode(['info_about_language'=>$info_about_language, 'cake'=>$cake]);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage);
        }
    }
    
}
