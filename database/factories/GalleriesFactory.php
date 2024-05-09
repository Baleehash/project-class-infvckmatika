<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\galleries>
 */
class GalleriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'img-'.(mt_rand(1,4).'-' .(mt_rand(1,6))).'.jpg',
            'alt' => $this->faker->sentence(1),
        ];
    }
}
