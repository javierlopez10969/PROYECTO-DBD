<?php

namespace Database\Factories;

use App\Models\Comuna;
use App\Models\Feria;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descipcion'=>$this->faker->text($maxNbChars = 200), 
            'horario_desde'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            'horario_hasta'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            //
            'id_comuna' => Comuna::factory()
        ];
    }
}
