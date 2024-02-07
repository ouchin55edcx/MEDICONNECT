<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        DB::table('users')->insert([
            'firstName' => 'admin',
            'lastName' => 'admin',
            'photo' => 'profile.png',
            'genre' => 'Homme',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Patient
        DB::table('users')->insert([
            'firstName' => 'patient',
            'lastName' => 'patient',
            'photo' => 'profile.png',
            'genre' => 'Homme',
            'email' => 'patient@gmail.com',
            'password' => Hash::make('patient'),
            'role' => 'patient',
            'Address' => 'Marrakech',
            'CIN' => 'EE85647',
            'phone' => '0665621454',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Doctor
        DB::table('users')->insert([
            'firstName' => 'Doctor',
            'lastName' => 'Doctor',
            'photo' => 'profile.png',
            'genre' => 'Homme',
            'email' => 'Doctor@gmail.com',
            'password' => Hash::make('doctor'),
            'role' => 'doctor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
