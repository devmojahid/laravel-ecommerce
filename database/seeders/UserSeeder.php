<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 1,
                'status' => 'active',
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 1,
                'status' => 'active',
            ],
            [
                'name' => 'user 1',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'role' => 3,
                'status' => 'active',
            ],
        ]);
    }
}
