<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat atau memperbarui akun admin CRM Geely BSD
        User::updateOrCreate(
            ['email' => 'admin@geelybsd.id'],
            [
                'name' => 'Admin Geely BSD',
                'password' => Hash::make('geelybsd2026'),
                'email_verified_at' => now(),
            ]
        );
    }
}