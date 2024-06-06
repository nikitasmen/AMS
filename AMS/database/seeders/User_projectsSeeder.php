<?php

namespace Database\Seeders;

use App\Models\User_projects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User_projectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectIDs = DB::table('projects')->plunk('id');
        $userIDs = DB::table('users')->plunk('id');
        User_projects::factory(3)->create([
            'user_id' => fake()->randomElement($userIDs),
            'project_id' => fake()->randomElement($projectIDs),
        ]);
    }
}
