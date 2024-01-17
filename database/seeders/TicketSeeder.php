<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '2024-12-01',
                'price' => 10,
                'ticket_type_id' => 1,
                'train_id' => 1
            ],
            [
                'date' => '2024-11-04',
                'price' => 45,
                'ticket_type_id' => 2,
                'train_id' => 2,
            ],
            [
                'date' => '2024-02-21',
                'price' => 10,
                'ticket_type_id' => 1,
                'train_id' => 3
            ],
            
        ]);
    }
}
