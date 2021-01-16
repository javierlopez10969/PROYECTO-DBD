<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model;

class UnidadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cantidad'=>$this->faker->numberBetween($min = 1, $max = 50),
			'tipo_cantidad'=>$this->faker->numberBetween($min = 0, $max = 6)
        ];
    }
}
