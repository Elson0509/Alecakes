<?php

use Illuminate\Database\Seeder;

class Filling_datasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filling_datas')->insert([
            'language_id'=>1,
            'title'=>'Menu de Recheios',
            'text'=>'Abaixo está o menu de recheios disponíveis para os bolos confeitados. Trabalhamos sempre com sabores provenientes de frutas frescas, chocolate puro e produtos da mais alta qualidade. Nunca utilizamos massa pronta, sabores artificiais ou produtos de 2ª linha.'
        ]);
        DB::table('filling_datas')->insert([
            'language_id'=>2,
            'title'=>'Fillings Menu',
            'text'=>'Below is the menu of fillings available for our cakes. We always work with flavors from fresh fruits, pure chocolate and products of the highest quality. We never use ready-made pasta, artificial flavors or 2nd line products.'
        ]);
    }           
}
