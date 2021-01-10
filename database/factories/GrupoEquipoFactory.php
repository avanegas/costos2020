<?php

namespace Database\Factories;

use App\Models\Zona;
use App\Models\GrupoEquipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoEquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GrupoEquipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->unique()->sentence(),
            'description' => $this->faker->text(100),
            'zona_id'     => Zona::all()->random()->id,
        ];
    }
}
