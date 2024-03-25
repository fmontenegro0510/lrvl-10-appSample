<?php

namespace Database\Factories;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Correo>
 */
class CorreoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $postulante = Postulante::all()->random();
        return [
            'mail' => $this->faker->freeEmail(),
            'postulante_id' => $postulante->id
        ];
    }
}
