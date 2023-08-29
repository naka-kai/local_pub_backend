<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'content' => $this->faker->sentence,
            'tel' => $this->faker->phoneNumber,
            'address' => $this->faker->safeEmail,
            'sns' => $this->faker->url,
            'photo' => $this->faker->imageUrl
        ];
    }
}
