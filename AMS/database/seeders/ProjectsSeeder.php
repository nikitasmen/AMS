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
            'name' => function(){ return fake()->name(); },
            'description' => function(){ return fake()->text();},
            'budget' => function(){ return fake()->numberBetween(1, 9000);},
            'start_date' => function(){ return fake()->date(); },
            'end_date' => function(){ return fake()->date();},
            'status' => function(){ return fake()->numberBetween(1, 3);}
        ]);
    }
}
