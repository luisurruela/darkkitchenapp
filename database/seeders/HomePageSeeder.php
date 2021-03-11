<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_pages')->insert([
            'title'     => 'Welcome to DarkKitchen App',
            'subtitle'  => 'A place to show your specials to the world',
            'logo'  => 'logo.png',
            'cover'  => 'cover.png',
        ]);
    }
}
