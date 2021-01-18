<?php

namespace Database\Factories;

use App\Models\PuestoDeVenta;
use App\Models\Feriante;
use Illuminate\Database\Eloquent\Factories\Factory;


class PuestoDeVentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PuestoDeVenta::class;

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
