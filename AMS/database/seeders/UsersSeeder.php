<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create([
            'name' => fake()->name(),
            'email' => function() {
                return fake()->unique()->email;
            },
            'password' => fake()->password(),
        ]);
    }
}
