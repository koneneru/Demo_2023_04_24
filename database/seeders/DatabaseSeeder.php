<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            OrderStatusesTableSeeder::class,
            RolesTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            OrdersTableSeeder::class,
            ProductsInOrderTableSeeder::class,
        ]);
    }
}
