<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->randomElement($array = array ('Pollo','Frutas','Verduras','Carne y Pescado,','Huevos','Artículos de Aseo','Otros','Alimento para Mascotas'))
            
            //
        ];
    }
}
