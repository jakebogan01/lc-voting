<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = ucwords($this->faker->words(4,true));
        $slug = Str::slug($title,'-');
        return [
            'user_id' => User::factory(),
            'category_id' => $this->faker->numberBetween(1, 4),
            'status_id' => $this->faker->numberBetween(1, 5),
            'title'=> $title,
            'description'=> $this->faker->paragraph(5),
            'slug'=>$slug,
        ];
    }
}
