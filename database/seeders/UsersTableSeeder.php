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
        \App\Models\User::factory()->create([
            "name"=> "Gustavo Cerati",
            'username' => 'guscer',
            'password'=> Hash::make('root'),
            'remember_token'=> Str::random(20),
        ])->assignRole('User');
        // \App\Models\User::factory()->create([
        //     "name"=> "Nicolas Mendoza",
        //     'username' => 'nicmen',
        //     'password'=> Hash::make('root'),
        //     'remember_token'=> Str::random(20),
        // ])->assignRole('Admin');
    }
}