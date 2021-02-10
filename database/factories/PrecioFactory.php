<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Precio;
use App\Models\GrupoPrecio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrecioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Precio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->unique()->sentence(),
            'unidad'          => $this->faker->word(10),
            'detalle'         => $this->faker->sentence(),
            'directo'         => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 0.1, $max = 100),
            'grupo_precio_id' => GrupoPrecio::all()->random()->id,
            'user_id'         => User::all()->random()->id,
        ];
    }
}