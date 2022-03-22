<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedore;
class ProveedoreFactory extends Factory
{

    protected $model =  Proveedore::class;
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
            'Compañia' => $this->faker->company,
            'Email_de_la_compañia' => $this->faker->unique->companyEmail
            //
            //
        ];
    }
}
