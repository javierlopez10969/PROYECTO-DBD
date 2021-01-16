<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class FerianteFactory extends Factory
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
            'direccion_feriante'=>$this->faker->adress,
            'telefono_feriante'=>$this->faker->phoneNumber,
            'nombre_feriante'=>$this->faker->name
            //
        ];
    }
}
