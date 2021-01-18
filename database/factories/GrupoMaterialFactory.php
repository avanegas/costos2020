<?php

namespace Database\Factories;

use App\Models\Zona;
use App\Models\GrupoMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoMaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GrupoMaterial::class;

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
