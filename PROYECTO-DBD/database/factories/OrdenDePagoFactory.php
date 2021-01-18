<?php

namespace Database\Factories;

use App\Models\Feriante;
use App\Models\OrdenDePago;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenDePagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrdenDePago::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Declarar variables
            'fecha_de_pago'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tipo_pago'=>$this->faker->randomElement($array = array ('Credito','Debito','Prepago','Deposito')) ,
            'valor_total_pago'=>$this->faker->numberBetween($min = 100, $max = 100000),
            'id_feriante' => Feriante::factory()
        ];
    }
}
