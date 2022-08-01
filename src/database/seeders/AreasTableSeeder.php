<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'id' => '1',
            'name_area' => '東京都',
        ]);

        DB::table('areas')->insert([
            'id' => '2',
            'name_area' => '大阪府',
        ]);

        DB::table('areas')->insert([
            'id' => '3',
            'name_area' => '福岡県',
        ]);
    }
}
