<?php

namespace Database\Factories;

use App\Models\Transporte;
use App\Models\Zona;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransporteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transporte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'    => $this->faker->unique()->sentence(),
            'unidad'  => $this->faker->word(10),
            'tipo'    => $this->faker->word(10),
            'tarifa'  => $this->faker->randomFloat($nbMaxDecimals = 4, $min = 0.1, $max = 10),
            'zona_id' => Zona::all()->random()->id,
        ];
    }
}
