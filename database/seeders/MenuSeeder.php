<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
{
    Menu::create([
        'name' => 'Pizza',
        'image' => 'https://images.unsplash.com/photo-1548365328-5c9f2c4a44d8',
        'price' => 1200
    ]);

    Menu::create([
        'name' => 'Burger',
        'image' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd',
        'price' => 900
    ]);
}
    
}
