<?php

namespace Database\Seeders;

use App\Models\User;
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
        $userId = User::all()->pluck('id')->toArray();
        $networkId = User::all()->pluck('id')->toArray();

        User_network::factory(3)->create()->each(function ($user_network) use ($userId, $networkId) {
            $user_network->user_id = fake()->randomElement($userId);
            $user_network->network_id = fake()->randomElement($networkId);
        });

    }
}
