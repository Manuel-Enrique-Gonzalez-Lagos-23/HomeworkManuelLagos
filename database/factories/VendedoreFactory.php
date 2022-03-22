<?php

namespace Database\Factories;
use App\Models\Vendedore;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendedoreFactory extends Factory
{

    protected $model =  Vendedore::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->firstName,
            'Apellido' => $this->faker->lastname,
            'Edad' => $this->faker->numberbetween(15, 100),
            'Domicilio' => $this->faker->address,
            'Numero_de_telefono' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique->email,
            'Nombre_de_usuario' => $this->faker->unique->userName,
            'Contraseña' => $this->faker->unique->password
            
            

            //
        ];
    }
}
