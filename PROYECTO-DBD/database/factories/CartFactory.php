<?php

namespace Database\Factories;

use App\Models\cart;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_producto'=> Producto::factory()
            //'id_feriafavoritos' => FeriaFavorito::factory()
            //
        ];
    }
}
