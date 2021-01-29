<?php

namespace Database\Factories;

use App\Models\UserMeta;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserMetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserMeta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'ocupation' => $this->faker->unique()->sentence(1),
        'description' => $this->faker->text(),
        
        ];
    }
}
