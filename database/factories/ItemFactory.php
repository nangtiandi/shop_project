<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $description = $this->faker->realText(1000);
        $excerpt = Str::words($description,20);

        return [
            'model' => $this->faker->word(),
            'description' => $description,
            'excerpt' => $excerpt,
            'category_id' => Category::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            'price' => rand(300,3000),
            'feature_image' => 'default.png'
        ];
    }
}
