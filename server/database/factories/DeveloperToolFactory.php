<?php

namespace Database\Factories;

use App\Models\DeveloperTool;
use App\Models\Tool;
use App\Models\Developer;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperToolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeveloperTool::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "tool_id" => Tool::inRandomOrder()->first()->id,
            "developer_id" => Developer::inRandomOrder()->first()->id
        ];
    }
}
