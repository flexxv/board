<?php

namespace Database\Factories;

use App\Models\Bulletin;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BulletinFactory extends Factory
{
    protected $model = Bulletin::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'desc' => $this->faker->text,
            'price' => random_int(1000,10000000),
            'address' => $this->faker->address(),
            'image' => $this->faker->imageUrl(),
            'phone'=>$this->faker->phoneNumber(),
            'category_id' => Category::get()->random()->id,
            'user_id' => User::get()->random()->id
        ];
    }
}
