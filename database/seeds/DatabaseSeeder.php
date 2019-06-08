<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(Carousel_imgSeeder::class);
        $this->call(Menu_linksSeeder::class);
        $this->call(Footer_infosSeeder::class);
        $this->call(CardsSeeder::class);
        $this->call(Card_infosSeeder::class);
        $this->call(Card_imgsSeeder::class);
        $this->call(Parallax_infosSeeder::class);
        $this->call(FillingsSeeder::class);
        $this->call(Filling_datasSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(Price_infoSeeder::class);
        
        
    }
}
