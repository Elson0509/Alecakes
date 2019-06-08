<?php

use Illuminate\Database\Seeder;

class Carousel_imgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousel_imgs')->insert([
            'img_path'=>'img01.jpg',
            'img_alt'=>'Personalized cupcakes'
        ]);
        DB::table('carousel_imgs')->insert([
            'img_path'=>'img02.jpg',
            'img_alt'=>'Princess Cake'
        ]);
        DB::table('carousel_imgs')->insert([
            'img_path'=>'img03.jpg',
            'img_alt'=>'Car Theme Cake'
        ]);
        DB::table('carousel_imgs')->insert([
            'img_path'=>'img04.jpg',
            'img_alt'=>'Pikachu Cake'
        ]);
        DB::table('carousel_imgs')->insert([
            'img_path'=>'img05.jpg',
            'img_alt'=>'Little Owl Cake'
        ]);
        
    }
}
