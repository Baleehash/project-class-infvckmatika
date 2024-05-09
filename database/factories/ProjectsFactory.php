<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.`
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'mockup.PNG',
            'projectName' => $this->faker->sentence(mt_rand(1,2)),
            'member' => $this->faker->name(mt_rand(1,2)),
            'link' => $this->faker->domainName(),
            'member_id' => mt_rand(1,14)

        ];
    }
}
