<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
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
            'razao_social' => $this->faker->name(),
            'nome_fantasia' => $this->faker->name(),
            'cnpj' => $this->faker->numberBetween(1, 11)
        ];
    }
}
