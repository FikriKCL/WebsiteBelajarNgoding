<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Lesson;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Learning>
 */
class LearningFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_user' => User::inRandomOrder()->value('id') ?? User::factory(),
            'id_lesson' => Lesson::inRandomOrder()->value('id') ?? Lesson::factory(),
            'time_learn_start' => fake()->dateTimeBetween('-7 days', 'now'),
            'time_learn_end' => fake()->dateTimeBetween('now', '+1 hour'),
            'point'=>fake()->numberBetween(1,100),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            'deleted_at' => fake()->optional()->dateTime(),
        ];
    }
}
