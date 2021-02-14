<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Oferta;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaFactory extends Factory
{
    protected $model = Oferta::class;

    public function definition()
    {

        return [
            'name'       => $this->faker->sentence(),
            'unidad'     => $this->faker->word(10),
            'descripcion'=> $this->faker->sentence(),
            'stock'      => $this->faker->numberBetween(1, 100),
            'precio'     => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.10, $max = 1000),
            'file'       => $this->faker->word() . '.pdf',
            'status'      => $this->faker->randomElement(['PUBLISHED', 'DRAFT']),
            'user_id'    => User::all()->random()->id,
        ];
    }
}
