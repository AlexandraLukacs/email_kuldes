<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\LibUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::all()->random()->book_id,
            'hardcovered' => rand(0,2),
            'publication' => rand(1950,2024),
            'status' => rand(1,3)
        ];
    }
}
