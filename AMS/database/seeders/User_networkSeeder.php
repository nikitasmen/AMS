<?php

namespace Database\Seeders;

use App\Models\User_network;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User_networkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coursesIDs = DB::table('users')->plunk('id');
        User_network::factory(3)->create([
            'user_id' => fake()->randomElement($coursesIDs),
            'network_id' => fake()->randomElement($coursesIDs),
        ]);
    }
}
