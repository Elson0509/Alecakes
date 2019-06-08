<?php

use Illuminate\Database\Seeder;

class Menu_linksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('menu_links')->insert([
           'language_id'=>1,
            'name'=>'Currículo',
            'link'=>'/br/resume'
        ]);*/
        DB::table('menu_links')->insert([
           'language_id'=>1,
            'name'=>'Sabores',
            'link'=>'/br/fillings'
        ]);
        DB::table('menu_links')->insert([
           'language_id'=>1,
            'name'=>'Preços',
            'link'=>'/br/price'
        ]);/*
        DB::table('menu_links')->insert([
           'language_id'=>1,
            'name'=>'Testemunhos',
            'link'=>'/br/testemonials'
        ]);
        
        DB::table('menu_links')->insert([
           'language_id'=>2,
            'name'=>'Resume',
            'link'=>'/en/resume'
        ]);*/
        DB::table('menu_links')->insert([
           'language_id'=>2,
            'name'=>'Fillings',
            'link'=>'/en/fillings'
        ]);
        DB::table('menu_links')->insert([
           'language_id'=>2,
            'name'=>'Price',
            'link'=>'/en/price'
        ]);/*
        DB::table('menu_links')->insert([
           'language_id'=>2,
            'name'=>'Testemonials',
            'link'=>'/en/testemonials'
        ]);*/

    }
}
