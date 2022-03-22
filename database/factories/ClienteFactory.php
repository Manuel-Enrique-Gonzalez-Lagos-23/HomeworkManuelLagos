<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
class ClienteFactory extends Factory
{
    protected $model =  Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->FirstName,
            'Apellido' => $this->faker->lastname,
            'Edad' => $this->faker->numberbetween(15, 100),
            'Domicilio' => $this->faker->address,
            'Numero_de_telefono' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique->email,
            'Tarjeta_de_credito' => $this->faker->creditCardType,
            'Numero_de_tarjeta' => $this->faker->creditCardNumber

            //
        ];
    }
}
