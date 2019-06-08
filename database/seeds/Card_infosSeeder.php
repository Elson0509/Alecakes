<?php

use Illuminate\Database\Seeder;

class Card_infosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_infos')->insert([
            'card_id'=>1,
            'language_id'=>1,
            'title'=>'Bolo da Frozen',
            'text'=>'Bolo com tema da Frozen, recheio de coco, para uma festa de 5 anos.',
            'img_alt'=>'Bolo Frozen'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>1,
            'language_id'=>2,
            'title'=>'Frozen Birthday Cake',
            'text'=>'Frozen-themed cake, coconut filling, for a 5-year party.',
            'img_alt'=>'Frozen Birthday Cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>2,
            'language_id'=>1,
            'title'=>'Bolo do Smilinguido',
            'text'=>'Bolo com o tema do Smilinguido, para aniversário do Kaíque, com recheio de chocolate.',
            'img_alt'=>'Bolo Smilinguido'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>2,
            'language_id'=>2,
            'title'=>'Smilinguido Birthday Cake',
            'text'=>'Cake with the theme of Smilinguido, for birthday of the Kaíque, with chocolate filling.',
            'img_alt'=>'Smilinguido Cake'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>3,
            'language_id'=>1,
            'title'=>'Bolo - Como Treinar seu Dragão',
            'text'=>'Bolo do tema Como Treinar seu Dragão, com recheio de amendoin, para aniversário.',
            'img_alt'=>'Bolo Como Treinar seu Dragão'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>3,
            'language_id'=>2,
            'title'=>'How to Train Your Dragon Cake',
            'text'=>'How to Train Your Dragon Themed Cake, with peanut filling, for birthday.',
            'img_alt'=>'How to Train Your Dragon Cake'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>4,
            'language_id'=>1,
            'title'=>'Bolo de Flores',
            'text'=>'Bolo de Flores com recheio de Doce de Leite.',
            'img_alt'=>'Bolo Flores'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>4,
            'language_id'=>2,
            'title'=>'Flowers Cake',
            'text'=>'Flowers Cake with dulce de leche filling.',
            'img_alt'=>'Flowers Cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>5,
            'language_id'=>1,
            'title'=>'Bolo - Pastora Jump',
            'text'=>'Bolo com recheio de morango como tema Pastora Jump',
            'img_alt'=>'Bolo Pastora Jump'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>5,
            'language_id'=>2,
            'title'=>'Pastora Jump Cake',
            'text'=>'Bolo with strawberry filling Pastora Jump Themed',
            'img_alt'=>'Pastora Jump Cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>6,
            'language_id'=>1,
            'title'=>'Bolo do Flamengo e dia das mães',
            'text'=>'Bolo do Flamengo e do dia das mães com recheio de coco.',
            'img_alt'=>'Bolo Flamengo e Dia das mães'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>6,
            'language_id'=>2,
            'title'=>"Flamengo and Mother's day Cake",
            'text'=>"Flamengo and Mother's day Cake with coconut filling.",
            'img_alt'=>"Flamengo and Mother's day Cake"
        ]);
        
        DB::table('card_infos')->insert([
           'card_id'=>7,
            'language_id'=>1,
            'title'=>'Bolo da Corujinha',
            'text'=>'Bolo de aniversário da tema da Corujinha no sabor de morango.',
            'img_alt'=>'Bolo da Corujinha'
        ]);
        DB::table('card_infos')->insert([
           'card_id'=>7,
            'language_id'=>2,
            'title'=>'Little Owl Cake',
            'text'=>'Birthday cake with Little Owl Theme, strawberry filling.',
            'img_alt'=>'Little Owl cake'
        ]);

        DB::table('card_infos')->insert([
            'card_id'=>8,
            'language_id'=>1,
            'title'=>'Bolo da Minnie',
            'text'=>'Bolo com tema da Minnie no sabor mousse de chocolate',
            'img_alt'=>'Bolo da Minnie'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>8,
            'language_id'=>2,
            'title'=>'Minnie Cake',
            'text'=>'Minnie Mouse themed cake with chocolate mousse filling.',
            'img_alt'=>'Minnie Cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>9,
            'language_id'=>1,
            'title'=>'Bolo do Ursos sem Curso',
            'text'=>'Bolo de aniversário com o tema Ursos sem Curso, com recheio de Cocadinha.',
            'img_alt'=>'Bolo do Ursos sem Curso'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>9,
            'language_id'=>2,
            'title'=>'We Bare Bears Cake',
            'text'=>'Birthday cake with the theme We Bare Bears, with Cocadinha filling.',
            'img_alt'=>'We Bare Bears Cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>10,
            'language_id'=>1,
            'title'=>'Bolo de anivesário de 40 anos',
            'text'=>'Bolo de aniversário de 40 anos, no sabor Danette',
            'img_alt'=>'Bolo aniversário 40 anos'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>10,
            'language_id'=>2,
            'title'=>'40-year-old birthday cake',
            'text'=>'40-year-old birthday cake with Danette filling.',
            'img_alt'=>'40-year-old cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>11,
            'language_id'=>1,
            'title'=>'Bolos e doces diversos para uma festa',
            'text'=>'Bolos e doces personalizados diversos para uma festa.',
            'img_alt'=>'Bolos e doces'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>11,
            'language_id'=>2,
            'title'=>'Various cakes and candies for a party',
            'text'=>'Various personalized cakes and candies for a party',
            'img_alt'=>'Personalized cakes and candies'
        ]);
        
        DB::table('card_infos')->insert([
           'card_id'=>12,
            'language_id'=>1,
            'title'=>'Bolo do Pikachu',
            'text'=>'Bolo para uma festa infantil no sabor de leite Ninho.',
            'img_alt'=>'Bolo do Pikachu decorado'
        ]);
        DB::table('card_infos')->insert([
           'card_id'=>12,
            'language_id'=>2,
            'title'=>'Pikachu Cake',
            'text'=>'Cake for a children\'s party, Ninho Milk filling.',
            'img_alt'=>'Pikachu decorated cake'
        ]);
        
        DB::table('card_infos')->insert([
           'card_id'=>13,
            'language_id'=>1,
            'title'=>'Bolo de princesa',
            'text'=>'Bolo de aniversário para para uma criança de 6 anos, no sabor de coco.',
            'img_alt'=>'Bolo de princesa decorados'
        ]);
        DB::table('card_infos')->insert([
           'card_id'=>13,
            'language_id'=>2,
            'title'=>'Princess cake',
            'text'=>'Birthday Cake for a 6-years-old girl, coconut filling.',
            'img_alt'=>'Princess decorated cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>14,
            'language_id'=>1,
            'title'=>'Bolo de noivado',
            'text'=>'Bolo de noivado no sabor Nutella',
            'img_alt'=>'Bolo de noivado'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>14,
            'language_id'=>2,
            'title'=>'Engagement Cake',
            'text'=>'Engagement Cake with Nutella filling.',
            'img_alt'=>'Engagement Cake'
        ]);
        
        DB::table('card_infos')->insert([
            'card_id'=>15,
            'language_id'=>1,
            'title'=>'Bolo Sensação de morango',
            'text'=>'Bolo com recheio e cobertura de morango.',
            'img_alt'=>'Bolo Sensação de morango'
        ]);
        DB::table('card_infos')->insert([
            'card_id'=>15,
            'language_id'=>2,
            'title'=>'Cake sensation of strawberry',
            'text'=>'Cake with filling and cover made of strawberry',
            'img_alt'=>'Strawberry Sensation Cake'
        ]);
    }
}
