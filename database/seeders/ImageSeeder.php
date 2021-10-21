<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('images')->insert([
            'product_id' => 1,
            'path' => 'https://i2.wp.com/www.notebook.hu/blog/wp-content/uploads/2021/03/293479-01-1.jpg?ssl=1'
        ]);
        DB::table('images')->insert([
            'product_id' => 2,
            'path' => 'https://www.magicsystem.hu/images/blog/blog-38.jpg'
        ]);
        DB::table('images')->insert([
            'product_id' => 3,
            'path' => 'https://www.lg.com/uk/images/tvs/MD05942377/gallery/medium01.jpg'
        ]);
        DB::table('images')->insert([
            'product_id' => 4,
            'path' => 'https://assets.mmsrg.com/isr/166325/c1/-/pixelboxx-mss-78206269/mobile_786_587_png/HUAWEI-MediaPad-T5-10.1%22-32GB-WiFi-LTE-fekete-Tablet'
        ]);
        DB::table('images')->insert([
            'product_id' => 5,
            'path' => 'https://24.p3k.hu/app/uploads/2019/10/lenovo-z6-lite.png'
        ]);
        DB::table('images')->insert([
            'product_id' => 6,
            'path' => 'https://3geeksgadgets.com/wp-content/uploads/2021/02/iphone12promax.jpeg'
        ]);
    }
}
