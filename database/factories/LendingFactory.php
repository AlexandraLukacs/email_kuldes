<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\LibUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lending>
 */
class LendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => LibUser::all()->random()->id,
            'copy_id'=> Copy::all()->random()->copi_id,
            'start'=>fake()->date(),
            'warning'=>rand(0, 4)
        ];
    }
}
