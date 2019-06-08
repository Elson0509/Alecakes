<?php

use Illuminate\Database\Seeder;

class Price_infoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_infos')->insert([
           'language_id'=>1,
            'people_text'=>'pessoas',
            'text'=>"Nossos preços são definidos por tamanho do bolo e os recheios escolhidos. Temos como padrão dois recheios por bolo, mas você pode pedir recheios adicionais, o que adicionará um custo. Confira abaixo o preço dos bolos de acordo com seu tamanho:"
        ]);
        DB::table('price_infos')->insert([
           'language_id'=>2,
            'people_text'=>'people',
            'text'=>"Our prices are adjusted to the size of the cake and the chosen fillings. We have two fillings per cake, but you can order additional fillings, which will cost you. See below the price of the cakes according to their size:"
        ]);
        
    }
}
