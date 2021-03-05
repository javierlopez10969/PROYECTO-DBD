<?php

namespace Database\Factories;

use App\Models\Region;
use App\Models\Comuna;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComunaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comuna::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_comuna'=>$this->faker->randomElement($array = array ('San Felipe','Quilicura','Rancagua','Putaentdo','Rengo','Chincolco','San Lorenzo','La Florida','Arica','Renca','La Serena')),
            //
            'id_region' => Region::factory()
        ];
    }
}
