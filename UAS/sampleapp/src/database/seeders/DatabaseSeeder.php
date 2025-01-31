<?php

use Illuminate\Database\Seeder;
use Database\Seeders\EventsSeeder;
use Database\Seeders\ParticipantsSeeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([EventsSeeder::class]);
        $this->call([ParticipantsSeeder::class]);
        $this->call([AdminSeeder::class,]);
        
        // Tambahkan admin user di sini
        $this->seedUsers();
    }

    private function seedUsers(): void
    {
        \App\Models\User::firstOrCreate([
            'email' => 'admin@admin.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('p455w0rd'),
        ]);
    }
}
