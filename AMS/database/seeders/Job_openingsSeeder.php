<?php

namespace Database\Seeders;

use App\Models\Companies;
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
        $companyIDs = Companies::all()->pluck('id')->toArray();

        Job_openings::factory()->count(3)->create([
            'company_id' => fake()->randomElement($companyIDs),
            'title' => function(){ return fake()->jobTitle();},
            'description' => function(){ return fake()->sentence();},
            'salary' => function(){ return fake()->numberBetween(1000, 10000);},
            'location' => function(){ return fake()->city();},
            'type' => function(){ return fake()->randomElement(['full-time', 'part-time', 'contract', 'internship']);}
        ]);
    }
}
