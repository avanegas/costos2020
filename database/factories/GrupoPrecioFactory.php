<?php

namespace Database\Factories;

use App\Models\Zona;
use App\Models\GrupoPrecio;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoPrecioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GrupoPrecio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->unique()->word(20),
            'description' => $this->faker->text(100),
            'zona_id'     => Zona::all()->random()->id,
        ];
    }
}
