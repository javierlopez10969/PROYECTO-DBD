<?php

namespace Database\Factories;

use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'fecha_pago'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'valor_pago'=>$this->faker->numberBetween($min = 100, $max = 100000),
            'tipo_pago'=>$this->faker->randomElement($array = array ('Credito','Debito','Prepago','Deposito')),
            'id_cuenta_bancaria' => CuentaBancaria::factory(),
            'id_orden_compra' => OrdenDeCompra::factory()
        ];
    }
}
