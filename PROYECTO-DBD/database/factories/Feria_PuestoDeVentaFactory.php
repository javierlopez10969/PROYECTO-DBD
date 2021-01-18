<?php

namespace Database\Factories;

use App\Models\Feria;
use App\Models\PuestoDeVenta;
use App\Models\Feria_PuestoDeVenta;
use Illuminate\Database\Eloquent\Factories\Factory;

class Feria_PuestoDeVentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feria_PuestoDeVenta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_feria' => Feria::factory(),
            'id_puesto_venta' => PuestoDeVenta::factory()
        ];
    }
}
