<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Members>
 */
class MembersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'abe.png',
            // 'slug' => $this->faker->slug(),
            'member' => $this->faker->name(mt_rand(1,2)),
            'nickname' => $this->faker->sentence(1),
            'quotes' => $this->faker->sentence(4)
        ];
    }
}
