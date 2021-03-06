<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Unidad;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

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
        	'nombre_producto'=>$this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'categoria'=>$this->faker->randomElement($array = array ('Pollo','Frutas','Verduras','Carne y Pescado','Huevos','Artículos de Aseo','Otros','Alimento para Mascotas')),            
            //
            'id_categoria' => Categoria::factory(),
            'id_unidad' => Unidad::factory()
            
        ];
    }
}
