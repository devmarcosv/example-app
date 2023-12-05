<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Unit;

class CollaboratorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'unidade_id' => Unit::factory()->create()->id,
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->numerify('##.###.###/####-##'),
            'email' => $this->faker->email
        ];
    }
}
