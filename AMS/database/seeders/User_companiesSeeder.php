<?php

namespace Database\Seeders;

use App\Models\User_companies;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User_companiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIDs = DB::table('users')->pluck('id');
        $companyIDs = DB::table('companies')->pluck('id');
        User_companies::factory()->count(3)->create([
            'user_id' => fake()->randomElement($userIDs),
            'company_id' => fake()->randomElement($companyIDs),
            'role' => fake()->randomElement(['admin', 'employee'])
        ]);
    }
}
