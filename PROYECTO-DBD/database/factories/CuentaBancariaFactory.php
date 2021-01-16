<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CuentaBancariaFactory extends Factory
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
			'numero_cuenta'=>$this->faker->bankAccountNumber,
            'banco'=>$this->faker->;randomElement($array = array ('Banco Bci','Banco de Chile','Banco Estado','Banco Santander',
																  'Banco BICE','Banco Condell','Banco CrediChile','Banco Edwards Citi',
																  'Banco Falabella','Banco Internacional','Banco Itaú','Banco Ripley',
																  'Banco Security','Scotiabank')),			 
            'tipo_cuenta'=>$this->faker->($array = array ('vista','rut','ahorro','corriente','chequera electronica')),
            'balance'=>$this->faker->numberBetween($min = 0, $max = 10000000),
            //
            'id_feriante' => Feriante::factory(),
            'id_orden_pago' => OrdenDePago::factory(),
            'id_cliente' => Cliente::factory()
        ];
    }
}
