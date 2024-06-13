<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Companies;
use App\Models\User_companies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_companies>
 */
class User_companiesFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = User_companies::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::all()->isEmpty() ? null : User::all()->random()->id;
        $companyId = Companies::all()->isEmpty() ? null : Companies::all()->random()->id;
        return [
            'user_id' => $userId,
            'company_id' => $companyId,
            'role' => $this->faker->randomElement(['Admin', 'Employee'])
        ];
    }
}
