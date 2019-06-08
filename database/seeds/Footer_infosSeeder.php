<?php

use Illuminate\Database\Seeder;

class Footer_infosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_infos')->insert([
           'language_id'=>1,
            'text'=> "Formada e apaixonada por confeitaria, faço bolos confeitados e doces personalizados para festas e eventos."
        ]);
        DB::table('footer_infos')->insert([
           'language_id'=>2,
            'text'=>"Formed and passionate about bakery, I make confectionery and personalized cakes for parties and events."
        ]);
        
    }
}
