<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('cards')->insert([
            'img_src'=>'img01.JPG',
            'date'=> \Carbon\Carbon::createFromDate(2016,02,02)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'img02.JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,02,23)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'img03.JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,05,14)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'img04.JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,05,22)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'img05.JPG',
            'date'=> \Carbon\Carbon::createFromDate(2019,03,02)->toDateTimeString()
        ]);*/
        
        
        DB::table('cards')->insert([
            'img_src'=>'(4).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2016,6,18)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(7).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2016,10,25)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(13).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2016,10,27)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(15).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,7,04)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(21).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,7,13)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(26).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,8,8)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(29).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,8,14)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(34).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,11,6)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(38).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,11,9)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(41).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2017,12,16)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(47).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,1,18)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(54).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,2,19)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(56).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,5,16)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(60).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,7,29)->toDateTimeString()
        ]);
        DB::table('cards')->insert([
            'img_src'=>'(64).JPG',
            'date'=> \Carbon\Carbon::createFromDate(2018,10,21)->toDateTimeString()
        ]);
    }
}
