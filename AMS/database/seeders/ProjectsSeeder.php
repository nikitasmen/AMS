<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projects::factory()->count(5)->create([
            'name' => fake()->name(),
            'description' => fake()->text(),
            'budget' => fake()->numberBetween(1, 9000),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'status' => fake()->numberBetween(1, 3)
        ]);
    }
}
