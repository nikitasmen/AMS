<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Projects;
use App\Models\User_projects;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User_projectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectIDs = Projects::all()->pluck('id')->toArray();
        $userIDs = User::all()->pluck('id')->toArray();

        User_projects::factory(3)->create()->each(function ($user_project) use ($userIDs, $projectIDs) {
            $user_project->user_id = fake()->randomElement($userIDs);
            $user_project->project_id = fake()->randomElement($projectIDs);
        });
    }
}
