<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsInOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_in_order')->insert([
            [
                'order' => 1,
                'product' => 5,
                'count' => 1
            ],
            [
                'order' => 2,
                'product' => 8,
                'count' => 0
            ],
            [
                'order' => 3,
                'product' => 10,
                'count' => 5
            ],
            [
                'order' => 4,
                'product' => 3,
                'count' => 1
            ],
            [
                'order' => 1,
                'product' => 17,
                'count' => 8
            ],
        ]);
    }
}
