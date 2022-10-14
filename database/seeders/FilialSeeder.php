<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filials')->insert([
            'name' => 'Ленина',
        ]);
        DB::table('filials')->insert([
            'name' => 'Масленикова',
        ]);
        DB::table('filials')->insert([
            'name' => 'Протозанова',
        ]);
    }
}
