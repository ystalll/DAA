<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants = [
            [
                'name' => 'Anindya Putri',
                'email' => 'anindya@email.com',
                'phone' => '081234567890',
                'event_id' => 1,
                'registered_at' => now(),
            ],
            [
                'name' => 'Ahmad Khairul',
                'email' => 'ahmadkhai@email.com',
                'phone' => '082345678901',
                'event_id' => 2,
                'registered_at' => now(),
            ],
            [
                'name' => 'Diandra Maharani',
                'email' => 'dianrani@email.com',
                'phone' => '083456789012',
                'event_id' => 3,
                'registered_at' => now(),
            ],
        ];

        DB::table('participants')->insert($participants);
    }
}