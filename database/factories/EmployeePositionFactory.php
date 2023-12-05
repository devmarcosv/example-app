<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Collaborators;
use App\Models\Office;

class EmployeePositionFactory extends Factory
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
            'cargo_id' => Office::factory()->create()->id,
            'colaborador_id' => Collaborators::factory()->create()->id,
            'nota_desempenho' => $this->faker->randomNumber()
        ];
    }
}
