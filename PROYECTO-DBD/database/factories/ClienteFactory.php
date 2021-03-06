<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\FeriaFavorito;
use App\Models\FeriantesFavorito;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_cliente'=>$this->faker->name,
            'telefono_cliente'=>$this->faker->tollFreePhoneNumber,
            //
            'id_feriaF' => FeriaFavorito::factory(),
            'id_ferianteF' => FeriantesFavorito::factory()
        ];
    }
}
