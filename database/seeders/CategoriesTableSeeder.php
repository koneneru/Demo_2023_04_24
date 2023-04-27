<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'black',
                'title' => 'Чёрный чай'
            ],

            [
                'name' => 'green',
                'title' => 'Зелёный чай'
            ],

            [
                'name' => 'white',
                'title' => 'Белый чай'
            ],

            [
                'name' => 'rooibus',
                'title' => 'Ройбуш'
            ],

            [
                'name' => 'fruit-grass',
                'title' => 'Фруктовый и травяной чай, '
            ],

            [
                'name' => 'green-adds',
                'title' => 'Зеленый чай с добавками'
            ],

            [
                'name' => 'black-adds',
                'title' => 'Чёрный чай с добавками'
            ],
        ]);
    }
}
