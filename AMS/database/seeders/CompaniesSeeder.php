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
            'name' => function(){ return fake()->company();},
            'email' => function(){ return fake()->unique()->email;},
            'password' => function(){ return fake()->password();},
            'website' => function(){ return fake()->url();},
            'major_industry' => function(){ return fake()->randomElement(['Technology', 'Finance', 'Healthcare', 'Education', 'Retail', 'Manufacturing', 'Construction', 'Hospitality', 'Transportation', 'Energy', 'Agriculture', 'Media', 'Entertainment', 'Telecommunications', 'Automotive', 'Real Estate', 'Government', 'Nonprofit', 'Other']);}
        ]);
    }
}
