<?php

namespace Database\Factories;
use App\Models\User_projects;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class User_projectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User_projects::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::all()->isEmpty() ? null : User::all()->random()->id;
        $projectId = Projects::all()->isEmpty() ? null : Projects::all()->random()->id;

        return [
            'user_id' => $userId,
            'project_id' => $projectId
        ];
    }
}
