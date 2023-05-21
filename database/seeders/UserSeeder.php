<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::create([
            'name' => 'Le Malade',
            'email' => 'test.user@dev.php',
            'password' => Hash::make('Password@SuperDev19'),
            'email_verified_at' => now(),
        ]);
    }
}
