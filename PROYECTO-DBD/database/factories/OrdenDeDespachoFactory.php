<?php

namespace Database\Factories;

use App\Models\Feriante;
use App\Models\Pago;
use App\Models\OrdenDeDespacho;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrdenDeDespachoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrdenDeDespacho::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_despacho'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tipo_despacho'=>$this->faker->lexify('Despacho ???'),
            'cantidad_elemento_despacho'=>$this->faker->numberBetween($min = 1, $max = 200),
            'valor_despacho'=>$this->faker->numberBetween($min = 1000, $max = 15000),
            //
            'id_feriante' => Feriante::factory(),
            'id_pago' => Pago::factory()
        ];
    }
}
