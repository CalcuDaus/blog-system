<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad Firdaus',
            'username' => 'muhammadfirdaus',
            'email' => 'muhammad.firdaus@example.com',
            'password' => Hash::make('daus123'),
        ]);

        User::factory(5)->create();
    }
}
