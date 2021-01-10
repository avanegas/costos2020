<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    protected $model = Comment::class;

    public function definition()
    {
        return [
            'comment'   => $this->faker->text(100),
            'user_id'   => User::all()->random()->id,
            'parent_id' => User::all()->random()->id,
        ];
    }
}
