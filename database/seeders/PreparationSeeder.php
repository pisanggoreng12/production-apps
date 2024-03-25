<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreparationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('preparations')->insert([
            'productionid' => '2003202412',
            'batch' => '1.2',
            'spesies' => 'SJ',
            'size' => '6.0-8.99',
            'weight' => '280.5',

        ]);
    }
}
