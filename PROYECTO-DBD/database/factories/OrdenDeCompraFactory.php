<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenDeCompraFactory extends Factory
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
            //
            'fecha_de_pago'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cantidad_elementos_orden'=>$this->faker->numberBetween($min = 1, $max = 100), 
            'estado_de_pago'=>$this->faker->boolean,
            //
            'id_cliente' => Cliente::factory()
        ];
    }
}
