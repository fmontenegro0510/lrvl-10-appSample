<?php

namespace Database\Factories;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulante>
 */
class PostulanteFactory extends Factory
{
    protected $model = Postulante::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'apinom' => $this->faker->name(),
            'dni' => $this->faker->randomNumber(8),
            'fecha_nacimiento' => $this->faker->date(),
        ];
    }
}
