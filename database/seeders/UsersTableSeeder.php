<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'role' => DB::table('roles')->where('name', 'admin')->value('id'),
            'name' => 'Admin',
            'surname' => 'Administrator',
            'login' => 'admin2023',
            'email' => 'admin@example.com',
            'phone' => '9999999999',
            'password' => Hash::make('tea2023'),
        ]);
    }
}
