<?php

namespace Database\Factories;

use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competitor>
 */
class CompetitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'professionId' => Profession::all()->random()->id,
            'name' => $this->faker->name(),
            'schoolName' => $this->faker->sentence(4),
            'birthDate' => $this->faker->date(),
            'hostel' => $this->faker->boolean(),
            'avatarUrl' => $this->faker->imageUrl(),
        ];
    }
}
