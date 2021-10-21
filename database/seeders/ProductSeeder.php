<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'laptop1',
            'description' => 'lapotp 1 olcsó és szuper!!',
            'category_id' => 1,
            'price' => 169000,
            'stock' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'laptop2',
            'description' => 'lapotp 2 drága és fullos!!',
            'category_id' => 1,
            'price' => 564000,
            'stock' => 4
        ]);
        DB::table('products')->insert([
            'name' => 'tv1',
            'description' => 'tv1 1 olcsó és hatalmas!!',
            'category_id' => 2,
            'price' => 85000,
            'stock' => 3
        ]);
        DB::table('products')->insert([
            'name' => 'tablet1',
            'description' => 'tablet1 1 olcsó és szuper!!',
            'category_id' => 3,
            'price' => 169000,
            'stock' => 6
        ]);
        DB::table('products')->insert([
            'name' => 'mobil',
            'description' => 'mobilka 1 olcsó és sdfsdds!!',
            'category_id' => 4,
            'price' => 35000,
            'stock' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'mobil2',
            'description' => 'iphone 1 drága és haszontlan!!',
            'category_id' => 4,
            'price' => 750000,
            'stock' => 6
        ]);
    }
}
