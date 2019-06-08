<?php

use Illuminate\Database\Seeder;

class FillingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Abacaxi com Creme Belga'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Ameixa com Coco'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Ameixa com Doce de Leite'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Amendoin'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Baba de Moça Moderno'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Brigadeiro'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Cocadinha'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Danette'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Doce de Leite'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Maracujá Trufado'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Mousse Alpino'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Mousse de Chocolate'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Mousse de Morango'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Mousse Leite Ninho'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Mousse Maracujá'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Prestígio'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Quatro Leites'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>1,
            'name'=>'Sensação de Morango (com chocolate)'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Pineapple with Belgian Crème'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Plum with Coco'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Plum with Dulce de Leche'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Peanut'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Brigadeiro'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Cocadinha'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Danette'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Dulce de Leche'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Truffled Passion Fruit'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Alpine mousse'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Chocolate mousse'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Strawberry Mousee'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Mousse Passion Fruit'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Prestige'
        ]);
        DB::table('fillings')->insert([
            'language_id'=>2,
            'name'=>'Sensation of Strawberry (with chocolate)'
        ]);
    }
}
