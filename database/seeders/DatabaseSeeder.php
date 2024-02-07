<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users using the UsersTableSeeder
        $this->call(UsersTableSeeder::class);

        // Use the User factory to create 3 additional users
        \App\Models\User::factory(3)->create();

        // Use the Specialty factory to create 10 specialties
        $this->call(SpecialtyTableSeeder::class);
        \App\Models\Specialty::factory(4)->create();
    }


}
