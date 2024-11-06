<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Dr. John Doe',
            'email' => 'johndoe@hospital.com',
            'password' => Hash::make('password'),
            'role' => 'doctor',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@patient.com',
            'password' => Hash::make('password'),
            'role' => 'patient',
        ]);
    }
}
