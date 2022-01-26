<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(10);
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'icon' => "fas fa-pencil"
        ];
    }
}
