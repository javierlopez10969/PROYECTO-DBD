<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model;

class PuestoDeVentaFactory extends Factory
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
            'categoria'=>$this->faker->randomElement($array = array ('Frutas','Verduras','Productos Aseo','Vestuario','Juguetes','Tecnologia','Otro')),
			'id_feriante' =>Feriante::factory()
        ];
    }
}
