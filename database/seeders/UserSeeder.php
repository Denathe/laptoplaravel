<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'first_name' => 'Attila',
            'last_name' => 'Dencsik',
            'email' => 'redhun71@gmail.com',
            'phone' => '+36305448911',
            'password' => Hash::make('V-rally01')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Kokó',
            'last_name' => 'Kis',
            'email' => 'kisko@gmail.com',
            'phone' => '23332332',
            'password' => Hash::make('hehe')
        ]);
    }
}
