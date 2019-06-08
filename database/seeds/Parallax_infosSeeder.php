<?php

use Illuminate\Database\Seeder;

class Parallax_infosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parallax_infos')->insert([
           'language_id'=>1,
            'title'=>'Bem vindo a Alecakes',
            'text1'=>'Fazemos bolos decorados e doces personalizados para festas na região do Rio de Janeiro.',
            'text2'=>'Delícia em cada pedaço!',
            'text3'=>'Acompanhe abaixo alguns de nossos trabalhos.',
        ]);
        DB::table('parallax_infos')->insert([
           'language_id'=>2,
            'title'=>'Welcome to Alecakes',
            'text1'=>'We make decorated cakes and custom candies to parties in Rio de Janeiro region.',
            'text2'=>'Each bit is delicious!',
            'text3'=>'You can see below some of our works.',
        ]);
        
    }
}
