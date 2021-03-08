<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $post_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($post_name);
        return [
            'name' => $post_name,
            'slug' => $slug,
            'content' => $this->faker->text(500),
        ];
    }
}
