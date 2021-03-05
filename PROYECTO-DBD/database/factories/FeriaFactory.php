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
            'descripcion'=>$this->faker->text($maxNbChars = 200), 
            'horario_desde'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            'horario_hasta'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            'nombre_comuna'=>$this->faker->randomElement($array = array ('San Felipe','Quilicura','Rancagua','Putaentdo','Rengo','Chincolco','San Lorenzo','La Florida','Arica','Renca','La Serena')),
            //
            'id_comuna' => Comuna::factory()
        ];
    }
}
