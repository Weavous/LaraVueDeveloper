<?php

namespace Database\Factories;

use App\Models\DeveloperHobby;
use App\Models\Hobby;
use App\Models\Developer;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperHobbyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeveloperHobby::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "hobby_id" => Hobby::inRandomOrder()->first()->id,
            "developer_id" => Developer::inRandomOrder()->first()->id
        ];
    }
}
