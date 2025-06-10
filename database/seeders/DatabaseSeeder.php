<?php

namespace Database\Seeders;

use App\Models\EmailConfig;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            StatusSeeder::class,
            CategoryTypeSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        EmailConfig::factory()->create([
            'host' => 'x-guard.lk',
            'username' => 'dev@x-guard.lk',
            'password' => '%de1j80H1',
            'smtp_secure' => 'ssl',
            'port' => '465',
            'sender_email' => 'dev@x-guard.lk',
            'sender_name' => 'Xguard',
        ]);
    }
}
