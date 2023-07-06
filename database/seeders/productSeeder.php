<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name' => 'Samsung Refrigerator',
                'price' => '3300',
                'description' => 'Smart Refrigerator product',
                'category' => 'Refrigerator',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0512/4793/9793/products/samsung_refrigerator_253l__inverter_-_rt28r__front_6e40fa63-1e35-4bef-b158-74bc0cf5c555.jpg?v=1684230829'
            ],
            [
                'name' => 'Pixel mobile',
                'price' => '500',
                'description' => 'Pixel smartphone product',
                'category' => 'mobile',
                'gallery' => 'https://www.buyzone.lk/wp-content/uploads/2023/01/google-pixel-5a-5g-00.jpg'
            ],
            [
                'name' => 'Apple TV',
                'price' => '1200',
                'description' => 'Apple smartphone TV product',
                'category' => 'TV',
                'gallery' => 'https://www.apple.com/newsroom/images/product/tv/standard/Apple-TV-4K-hero-221018_big.jpg.large.jpg'
            ],
            [
                'name' => 'Realme mobile',
                'price' => '700',
                'description' => 'Realme smartphone product',
                'category' => 'mobile',
                'gallery' => 'https://fdn2.mobgsm.com/vv/pics/realme/realme-8-1.jpg'
            ]
        ]);
    }
}
