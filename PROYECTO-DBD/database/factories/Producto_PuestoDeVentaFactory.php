<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model;

class Producto_PuestoDeVentaFactory extends Factory
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
            'id_puesto_venta'=> PuestoDeVenta::factory(),
			'id_producto'=> Producto::factory()
        ];
    }
}
