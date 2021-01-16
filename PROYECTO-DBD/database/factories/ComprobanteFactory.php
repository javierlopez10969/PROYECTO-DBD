<?php

namespace Database\Factories;

use App\Models\Comprobante;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComprobanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comprobante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_de_comprobante'=>$this->faker->randomElement($array = array ('boleta','factura')),
            'precio'=>$this->faker->numberBetween($min = 100, $max = 100000),
            //
            'id_orden_pago' => OrdenDePago::factory()
        ];
    }
}
