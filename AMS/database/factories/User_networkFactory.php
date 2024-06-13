<?php

namespace Database\Factories;
use App\Models\User_network;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_network>
 */
class User_networkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User_network::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::all()->isEmpty() ? null : User::all()->random()->id;
        $networkUserId = User::all()->isEmpty() ? null : User::all()->random()->id;
        return [
            'user_id' => $userId,
            'network_id' => $networkUserId
        ];
    }
}
