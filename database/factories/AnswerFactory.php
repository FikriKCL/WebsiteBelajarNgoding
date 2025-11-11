<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AnswerFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_answer' => Answer::inRandomOrder()->value('id') ?? Answer::factory(),
            'option_text' => fake()->word(),
            'is_correct' => fake()->numberBetween(0,1),
            'created_at' => fake()->datetime(),
            'deleted_at' => fake()->optional()->dateTime(),
            'updated_at' => fake()->datetime(),
        ];
    }
}
