<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DireccionDespachoFactory extends Factory
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
            'direccion'=>$this->faker->streetName,
            'numero'=>$this->faker->numberBetween($min = 1000, $max = 9000),
            //
            'id_cliente' => Cliente::factory(),
            'id_comuna' => Comuna::factory(),
            'id_orden_despacho' => OrdenDeDespacho::factory()
        ];
    }
}
