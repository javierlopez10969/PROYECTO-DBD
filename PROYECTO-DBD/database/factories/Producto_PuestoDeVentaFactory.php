<?php

namespace Database\Factories;

use App\Models\PuestoDeVenta;
use App\Models\Producto;
use App\Models\Producto_PuestoDeVenta;
use Illuminate\Database\Eloquent\Factories\Factory;


class Producto_PuestoDeVentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto_PuestoDeVenta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_puesto_venta'=> PuestoDeVenta::factory(),
			'id_producto'=> Producto::factory()
        ];
    }
}
