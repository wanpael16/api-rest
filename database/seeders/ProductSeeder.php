<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Iphone 13',
            'description' => 'Mobile Phone Apple',
            'price' => 98
        ]);

        DB::table('products')->insert([
            'name' => 'Ipad Pro 11',
            'description' => 'Table Apple',
            'price' => 120
        ]);

        DB::table('products')->insert([
            'name' => 'Playstation 5',
            'description' => 'Videoconsole',
            'price' => 20
        ]);
    }
}
