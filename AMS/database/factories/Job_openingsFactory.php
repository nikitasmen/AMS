<?php

namespace Database\Factories;

use App\Models\Job_openings;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job_openings>
 */
class Job_openingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job_openings::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id'=> Companies::all()->random()->id,
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'salary' => $this->faker->numberBetween(1000, 9000),
            'location' => $this->faker->city,
            'type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract'])

        ];
    }
}
