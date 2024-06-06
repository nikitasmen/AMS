<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job_openings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            ProjectsSeeder::class,
            CompaniesSeeder::class,
        ]);
        $this->call([
            User_projectsSeeder::class,
            User_networkSeeder::class,
            Job_openingsSeeder::class,
            User_companiesSeeder::class,
        ]);

    }
}
