<?php

namespace Database\Seeders;

use App\Models\Job_openings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Job_openingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyIDs = DB::table('companies')->plunk('id');
        Job_openings::factory()->count(3)->create([
            'company_id' => fake()->randomElement($companyIDs),
            'title' => fake()->jobTitle(),
            'description' => fake()->sentence(),
            'salary' => fake()->numberBetween(1000, 10000),
            'location' => fake()->city(),
            'type' => fake()->randomElement(['full-time', 'part-time', 'contract', 'internship']),
        ]);
    }
}
