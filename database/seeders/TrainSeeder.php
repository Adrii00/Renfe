<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Thomas',
                'passengers' => 235,
                'year' => 1999,
                'train_type_id' => 1
            ],
            [
                'name' => 'Orient Express',
                'passengers' => 1000,
                'year' => 2012,
                'train_type_id' => 3
            ],
            [
                'name' => 'ChuChu',
                'passengers' => 52,
                'year' => 2020,
                'train_type_id' => 2
            ],
            
        ]);
    }
}
