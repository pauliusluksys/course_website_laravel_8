<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'title' => $this->faker->unique()->sentence(1),
        'slug' => Str::slug($this->faker->unique()->sentence(1), '-'),
        'meta_title' => $this->faker->unique()->sentence(1),
        'description' => $this->faker->text(),
        'creator' => $this->faker->name,
        'time_to_complete'=> $this->faker->randomDigit,
        'user_id'=>rand(1,10),
        
        ];
    }
}
