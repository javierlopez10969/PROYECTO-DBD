<?php

namespace Database\Factories;

use App\Models\Feriante;
use App\Models\Cliente;
use App\Models\Datos_personal;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatosPersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Datos_personal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'correo_electronico'=>$this->faker->email,
            'user_name'=>$this->faker->userName,
            'password'=>$this->faker->password,
            //
            'id_feriante' => Feriante::factory(),
            'id_cliente' => Cliente::factory()          
        ];
    }
}
