<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('specialty')->insert([
            'specialtyName' => 'Cardiology',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('specialty')->insert([
            'specialtyName' => 'Orthopedics',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('specialty')->insert([
            'specialtyName' => 'Dermatology',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('specialty')->insert([
            'specialtyName' => 'Generalist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more specialties as needed
    }


}
