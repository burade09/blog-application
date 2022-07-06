<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Null_;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'description'=>$this->faker->text(20),
            'status'=>0,
            'category_id'=>Category::all()->random()->id,
            'image'=>null,
        ];
    }
}
