<?php

namespace Database\Factories;

use App\Models\Pago;
use App\Models\Orden_de_pago;
use App\Models\Pago_ordendepago;
use Illuminate\Database\Eloquent\Factories\Factory;

class Pago_OrdenDePagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pago_ordendepago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_pago' => Pago::factory(),
            'id_orden_pago' => Orden_de_pago::factory()
        ];
    }
}
