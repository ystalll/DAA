<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;

class EventsSeeder extends Seeder
{
    public function run()
    {
        Events::insert([
            [
                'name' => 'Sehari Bersama Lansia',
                'description' => 'Kegiatan sosial di panti jompo untuk berbagi kebahagiaan dengan para lansia melalui berbagai aktivitas.',
                'location'=> 'Jakarta',
                'quota' => 45,
                'event_date' => now()->addDays(7),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aksi Seribu Senyum',
                'description' => 'Berbagi kebahagiaan dengan memberikan bingkisan dan aktivitas hiburan untuk anak-anak di rumah sakit.',
                'location'=> 'Bandung',
                'quota' => 35,
                'event_date' => now()->addDays(14),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ramadhan Berbagi',
                'description' => 'Program pembagian takjil dan paket sembako bagi masyarakat kurang mampu selama bulan Ramadhan.',
                'location'=> 'Yogyakarta',
                'quota' => 30,
                'event_date' => now()->addDays(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}