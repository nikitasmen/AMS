<?php

namespace Database\Factories;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->company(),
            'email'=>$this->faker->unique()->safeEmail(),
            'password'=>$this->faker->password(),
            'website'=>$this->faker->url(),
            'major_industry'=>$this->faker->word()
        ];
    }
}
