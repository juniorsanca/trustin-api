<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            //   
            'image' => $this->faker->imageUrl($width = 640, $height = 480)(),
            'name' => $this->faker->name(),
            'about' => $this->faker->text($maxNbChars = 200),
            'user_id' => function() {
                return User::all()->random();
            },
        ];
    }
}
