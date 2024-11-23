<?php

namespace Database\Seeders;

use App\Models\Kelolakontak;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'test',
            'password' =>bcrypt('1234')
        ]);
        Kelolakontak::create([
            'no_whatsapp'=>'081234567890',
            'username_instagram'=>'youhou',
            'email'=>'test'
        ]);
    }
}
