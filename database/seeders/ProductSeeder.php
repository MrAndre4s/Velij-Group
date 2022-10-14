<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Футболка красная',
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Футболка синяя',
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'Толстовка',
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Кроссовки белые',
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Кроссовки черные',
            'category_id' => 3,
        ]);
    }
}
