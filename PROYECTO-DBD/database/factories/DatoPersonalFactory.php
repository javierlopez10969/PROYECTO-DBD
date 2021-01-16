<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatoPersonalFactory extends Factory
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
            'correo_electronico'=>$this->faker->email,
            'user_name'=>$this->faker->userName,
            'password'=>$this->faker->password
        ];
    }
}
