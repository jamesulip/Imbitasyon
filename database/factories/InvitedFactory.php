<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invited>
 */
class InvitedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        // create seeder for invited model
        return [
            'name' => $this->faker->name,
            'code' => strtoupper(\Str::random(4)),
            'event_id' => 1,
            'response_id' => $this->faker->numberBetween(1, 3),
            'attending' => $this->faker->boolean,
        ];
    }
}
