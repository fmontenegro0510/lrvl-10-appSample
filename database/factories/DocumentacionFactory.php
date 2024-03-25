<?php

namespace Database\Factories;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documentacion>
 */
class DocumentacionFactory extends Factory
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

            //sanciones, titulo, postulante_id
            'sanciones' => $this->faker->randomElement(['si', 'no']),
            'titulo' => $this->faker->name(),
            'postulante_id' => $postulante->id,
        ];
    }
}
