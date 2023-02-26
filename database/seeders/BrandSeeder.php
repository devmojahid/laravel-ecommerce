<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('brands')->insert([
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'logo' => 'uploads/brands/1.png',
                'website' => 'https://www.apple.com/',
                'email' => 'test@gmail.com',
                'phone' => '123456789',
                'address' => '123, New York, USA',
                'country' => 'USA',
                'city' => 'New York',
                'state' => 'New York',
                'zip' => '123456',
                'summary' => 'Apple is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.',
                'status' => 'active',
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'logo' => 'uploads/brands/2.png',
                'website' => 'https://www.samsung.com/',
                'email' => 'test@gmail.com',
                'phone' => '123456789',
                'address' => '123, New York, USA',
                'country' => 'USA',
                'city' => 'New York',
                'state' => 'New York',
                'zip' => '123456',
                'summary' => 'samsung is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.',
                'status' => 'active',
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'logo' => 'uploads/brands/3.png',
                'website' => 'https://www.xiaomi.com/',
                'email' => '',
                'phone' => '',
                'address' => '',
                'country' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'summary' => 'Xiaomi is a Chinese electronics company headquartered in Beijing. It designs, develops, and sells smartphones, mobile apps, laptops, and related consumer electronics.',
                'status' => 'active',
            ],
            [
                'name' => 'Oppo',
                'slug' => 'oppo',
                'logo' => 'uploads/brands/4.png',
                'website' => 'https://www.oppo.com/',
                'email' => '',
                'phone' => '',
                'address' => '',
                'country' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'summary' => 'Oppo is a Chinese consumer electronics and mobile communications company headquartered in Dongguan, Guangdong, China. It also has offices in Hong Kong, India, Indonesia, Malaysia, Myanmar, the Philippines, Singapore, Thailand, Turkey, the United Arab Emirates, the United Kingdom, and the United States.',
                'status' => 'active',
            ],
            [
                'name' => 'Vivo',
                'slug' => 'vivo',
                'logo' => 'uploads/brands/5.png',
                'website' => 'https://www.vivo.com/',
                'email' => '',
                'phone' => '',
                'address' => '',
                'country' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'summary' => 'Vivo is a Chinese smartphone manufacturer headquartered in Dongguan, Guangdong. It designs, develops, and sells smartphones, smartphone accessories, software, and online services.',
                'status' => 'active',
            ],
            [
                'name' => 'OnePlus',
                'slug' => 'oneplus',
                'logo' => 'uploads/brands/6.png',
                'website' => 'https://www.oneplus.com/',
                'email' => '',
                'phone' => '',
                'address' => '',
                'country' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'summary' => 'OnePlus is a Chinese smartphone manufacturer headquartered in Shenzhen, Guangdong. It designs, develops, and sells smartphones, mobile apps, and accessories.',
                'status' => 'active',
            ],
            [
                'name' => 'Nokia',
                'slug' => 'nokia',
                'logo' => 'uploads/brands/7.png',
                'website' => 'https://www.nokia.com/',
                'email' => '',
                'phone' => '',
                'address' => '',
                'country' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'summary' => 'Nokia is a Finnish multinational telecommunications, information technology, and consumer electronics company, founded in 1865.',
                'status' => 'active',
            ],
        ]);
    }
}
