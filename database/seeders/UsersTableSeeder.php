<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     "name" => "Nicolas Mendoza",
        //     'username' => 'nicmen',
        //     'password' => Hash::make('root'),
        //     'remember_token' => Str::random(20),
        // ])->assignRole('Admin');

        $firstName = fake()->firstName();
        $lastName = fake()->lastName();
        $name = $firstName . ' ' . $lastName;
        $username = strtolower(substr($firstName, 1, 3)) . strtolower(substr($lastName, 1, 3));

        \App\Models\User::factory()->create([
            "name" => $name,
            'username' => $username,
            'password' => Hash::make('root'),
            'remember_token' => Str::random(20),
        ])->assignRole('User');
    }
}