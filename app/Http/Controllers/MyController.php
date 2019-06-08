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
use App\Price;
use App\Price_info;

//TODO mudar link da imagem de homepage

class MyController extends Controller
{
    public $standardLanguage='en';
    
    public function index($lg){
        //Seeing if the language exists in the database
        if(Language::where('language',$lg)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['card_infos','menu_links','parallax_info','footer_info'])->where('language',$lg)->first();
            foreach($info_about_language->card_infos as $ci){
                $ci->card;
                $ci->card->link="/".$lg."/cake/".$ci->card->id;
            }
            //putting other language properties to be used in language selector in top menu
            $languages = Language::all();
            foreach($languages as $lang){
                if($lang->language==$lg){
                    $lang->active=true;
                }
                else{
                    $lang->active=false;
                }
                $lang->link='/'.$lang->language;
            }
            //images to be used in slideshow carousel
            $imgSlideshow = Carousel_img::all();
            return view('index', ['info_about_language'=> $info_about_language, 'languages'=>$languages, 'imgSlideshow'=>$imgSlideshow]);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage);
        }
    }
    
    
    public function curriculo(){
        
    }
    
    public function fillings($lg){
        //Seeing if the language exists in the database
        if(Language::where('language',$lg)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['menu_links','footer_info', 'fillings', 'filling_data'])->where('language',$lg)->first();
            //putting other language properties to be used in language selector in top menu
            $languages = Language::all();
            foreach($languages as $lang){
                if($lang->language==$lg){
                    $lang->active=true;
                }
                else{
                    $lang->active=false;
                }
                $lang->link='/'.$lang->language.'/fillings';
            }

            return view('fillings', ['info_about_language'=> $info_about_language, 'languages'=>$languages]);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage.'/fillings');
        }
    }
    
    public function price($lg){
        //Seeing if the language exists in the database
        if(Language::where('language',$lg)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['menu_links','footer_info', 'prices', 'price_info'])->where('language',$lg)->first();
            //putting other language properties to be used in language selector in top menu
            $languages = Language::all();
            foreach($languages as $lang){
                if($lang->language==$lg){
                    $lang->active=true;
                }
                else{
                    $lang->active=false;
                }
                $lang->link='/'.$lang->language.'/price';
            }
            return view('price', ['info_about_language'=> $info_about_language, 'languages'=>$languages]);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage.'/price');
        }
    }
    
    public function cake($lg, $id){
        if(Language::where('language',$lg)->exists() && Card::where('id',$id)->exists()){
            //language exists
            //info about language to be used in the page
            $info_about_language = Language::with(['menu_links','footer_info'])->where('language',$lg)->first();
            $cake = $info_about_language->card_infos()->where('card_id',$id)->first();
            $cake->card;
            $cake->card->card_imgs;
            
            //putting other language properties to be used in language selector in top menu
            $languages = Language::all();
            foreach($languages as $lang){
                if($lang->language==$lg){
                    $lang->active=true;
                }
                else{
                    $lang->active=false;
                }
                $lang->link='/'.$lang->language.'/cake/'.$id;
            }

            return view('cake', ['info_about_language'=> $info_about_language, 'languages'=>$languages, 'cake'=>$cake]);
        }
        else{
            //laguage do not exist
            return redirect('/'.$this->standardLanguage.'/price');
        }
    }
    
    
}
