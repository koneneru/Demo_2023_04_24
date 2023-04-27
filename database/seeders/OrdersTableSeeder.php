<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'status' => 2,
                'user' => 1,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ],
            [
                'status' => 1,
                'user' => 1,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ],
            [
                'status' => 3,
                'user' => 1,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ],
            [
                'status' => 1,
                'user' => 1,
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ],
        ]);
    }
}
