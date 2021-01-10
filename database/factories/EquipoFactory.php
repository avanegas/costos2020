<?php

namespace Database\Factories;

use App\Models\Equipo;
use App\Models\GrupoEquipo;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->unique()->sentence(),
            'marca'           => $this->faker->word(),
            'tipo'            => $this->faker->word(),
            'tarifa'          => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10000),
            'grupo_equipo_id' => GrupoEquipo::all()->random()->id,
        ];
    }
}
