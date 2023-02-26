<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'title' => 'Mobile',
                'slug' => 'mobile',
                'photo' => 'uploads/categories/1.svg',
                'summary' => 'Mobile Phone',
                'is_parent' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Tablet',
                'slug' => 'tablet',
                'photo' => 'uploads/categories/2.svg',
                'summary' => 'Tablet Phone',
                'is_parent' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Laptop',
                'slug' => 'laptop',
                'photo' => 'uploads/categories/3.svg',
                'summary' => 'Laptop Phone',
                'is_parent' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Camera',
                'slug' => 'camera',
                'photo' => 'uploads/categories/4.svg',
                'summary' => 'Camera Phone',
                'is_parent' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Accessories',
                'slug' => 'accessories',
                'photo' => 'uploads/categories/5.svg',
                'summary' => 'Accessories Phone',
                'is_parent' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Smart Watch',
                'slug' => 'smart-watch',
                'photo' => 'uploads/categories/6.svg',
                'summary' => 'Smart Watch Phone',
                'is_parent' => 1,
                'status' => 1,
            ],
            [
                'title' => 'Headphone',
                'slug' => 'headphone',
                'photo' => 'uploads/categories/7.svg',
                'summary' => 'Headphone Phone',
                'is_parent' => 1,
                'status' => 1,
            ],

        ]);
    }
}
