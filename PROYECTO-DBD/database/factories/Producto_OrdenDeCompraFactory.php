<?php

namespace Database\Factories;

use App\Models\Producto_orden_de_compra;
use App\Models\Producto;
use App\Models\OrdenDeCompra;
use Illuminate\Database\Eloquent\Factories\Factory;

class Producto_OrdenDeCompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto_orden_de_compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_producto' => Producto::factory(),
            'id_orden_compra' => OrdenDeCompra::factory()
        ];
    }
}
