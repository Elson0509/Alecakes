<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
           'language'=>'br',
            'currency'=>'R$'
        ]);
        DB::table('languages')->insert([
           'language'=>'en',
            'currency'=>'U$'
        ]);
    }
}
