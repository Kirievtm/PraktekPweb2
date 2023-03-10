<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'kirei',
            'email' => 'kirei@gmail.com',
            'password' => hash::make('kirei'),
            'hak_akses' => 'Admin',
            'remember_token' => Str::random(60),
        ]);
        User::create(
            [
            'name' => 'galang',
            'email' => 'galang@gmail.com',
            'password' => hash::make('galang'),
            'hak_akses' => 'User',
            'remember_token' => Str::random(60),
        ]
        );
    }        
}
