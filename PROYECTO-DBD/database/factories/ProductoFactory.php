<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
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
        	'precio_producto'=>$this->faker->numberBetween($min = 100, $max = 100000),
        	'unidad'=>$this->faker->numberBetween($min = 1, $max = 100),
        	'tipo_de_stock'=>$this->faker->boolean,
        	'nombre_producto'=>$this->faker->sentence($nbWords = 4, $variableNbWords = true)
            //
            'id_categoria' => Categoria::factory(),
            'id_unidad' => Unidad::factory()
            
        ];
    }
}
