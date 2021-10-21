<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'laptop'
        ]);
        DB::table('categories')->insert([
            'name' => 'tv'
        ]);
        DB::table('categories')->insert([
            'name' => 'tablet'
        ]);
        DB::table('categories')->insert([
            'name' => 'mobil'
        ]);
        DB::table('categories')->insert([
            'name' => 'pc'
        ]);
    }
}
