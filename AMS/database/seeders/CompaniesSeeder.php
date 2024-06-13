<?php

namespace Database\Seeders;

use App\Models\Companies;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Companies::factory(5)->create([
            'name' => fake()->company(),
            'email' => function() {
                return fake()->unique()->email;
            },
            'password' => fake()->password(),
            'website' => fake()->url(),
            'major_industry' => fake()->randomElement(['Technology', 'Finance', 'Healthcare', 'Education', 'Retail', 'Manufacturing', 'Construction', 'Hospitality', 'Transportation', 'Energy', 'Agriculture', 'Media', 'Entertainment', 'Telecommunications', 'Automotive', 'Real Estate', 'Government', 'Nonprofit', 'Other'])
        ]);
    }
}
