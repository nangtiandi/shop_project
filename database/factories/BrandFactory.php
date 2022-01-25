<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $slug = Str::slug($name);

        return [
            'title' => $name,
            'slug' => $slug,
            'logo' => 'default.png'
        ];
    }
}
