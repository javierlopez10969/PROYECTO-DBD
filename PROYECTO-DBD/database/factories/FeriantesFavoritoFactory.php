<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FeriantesFavorito;

class FeriantesFavoritoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeriantesFavorito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'valoracion'=>$this->faker->numberBetween($min = 0, $max = 10)
            //
        ];
    }
}
