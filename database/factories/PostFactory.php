<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Mmo\Faker\PicsumProvider($this->faker));
        //$this->faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($this->faker));
        return [
            'titulo'=>$this->faker->unique()->sentence(),
            'body'=>$this->faker->text(),
            'imagen'=>$this->faker->picsumUrl(640, 480)
        ];
    }
}
