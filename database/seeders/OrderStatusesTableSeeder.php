<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('order_statuses')->insert([
            [
                'name' => 'new',
                'title' => 'Новый'
            ],

            [
                'name' => 'accepted',
                'title' => 'Принят'
            ],

            [
                'name' => 'rejected',
                'title' => 'Отклонён'
            ],
        ]);
    }
}
