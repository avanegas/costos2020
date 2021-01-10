<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Zona;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Zona::class;

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
            'user_id'     => User::all()->random()->id,
        ];
    }
}
