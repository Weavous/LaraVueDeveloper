<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Hobby;

class DeveloperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Developer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $random = rand(0, 1) === 0 ? true : false;

        return [
            "name" => $this->faker->name($random === true ? "male" : "female"),
            "sex" => $random === true ? "M" : "F",
            "hobby_id" => Hobby::inRandomOrder()->first()->id,
            "birthdate" => date("Y-m-d H:i:s", rand())
        ];
    }
}
