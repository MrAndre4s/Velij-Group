<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductFilialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_filials')->insert([
            'filial_id' => 1,
            'product_id' => 1,
            'price' => 1000
        ]);
        DB::table('product_filials')->insert([
            'filial_id' => 1,
            'product_id' => 2,
            'price' => 1100
        ]);

        DB::table('product_filials')->insert([
            'filial_id' => 2,
            'product_id' => 1,
            'price' => 1200
        ]);
        DB::table('product_filials')->insert([
            'filial_id' => 2,
            'product_id' => 3,
            'price' => 1500
        ]);
        DB::table('product_filials')->insert([
            'filial_id' => 2,
            'product_id' => 2,
            'price' => 1300
        ]);

        DB::table('product_filials')->insert([
            'filial_id' => 3,
            'product_id' => 1,
            'price' => 1500
        ]);
        DB::table('product_filials')->insert([
            'filial_id' => 3,
            'product_id' => 5,
            'price' => 1500
        ]);
        DB::table('product_filials')->insert([
            'filial_id' => 3,
            'product_id' => 4,
            'price' => 1300
        ]);
    }
}
