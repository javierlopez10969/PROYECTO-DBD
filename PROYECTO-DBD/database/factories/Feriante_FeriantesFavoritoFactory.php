<?php

namespace Database\Factories;

use App\Models\Feriante;
use App\Models\FeriantesFavorito;
use App\Models\Feriante_FeriantesFavorito;
use Illuminate\Database\Eloquent\Factories\Factory;


class Feriante_FeriantesFavoritoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feriante_FeriantesFavorito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_feriante' => Feriante::factory(),
            'id_feriantesfavoritos' => FeriantesFavorito::factory(),
            //
        ];
    }
}
