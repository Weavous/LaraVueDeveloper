<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Tool;

class ToolSeeder extends Seeder
{
    private array $data = [
        [
            "url" => "https://img.icons8.com/office/16/000000/react.png",
            "name" => "React",
        ],
        [
            "url" => "https://img.icons8.com/color/48/000000/vue-js.png",
            "name" => "Vue",
        ],
        [
            "url" => "https://img.icons8.com/color/48/000000/angularjs.png",
            "name" => "Angular",
        ],
        [
            "url" => "https://img.icons8.com/fluency/48/000000/laravel.png",
            "name" => "Laravel",
        ],
        [
            "url" => "https://img.icons8.com/color/48/000000/git.png",
            "name" => "GIT",
        ],
        [
            "url" => "https://img.icons8.com/color/48/000000/nodejs.png",
            "name" => "NodeJS",
        ],
        [
            "url" => "https://img.icons8.com/color/48/000000/javascript.png",
            "name" => "JavaScript",
        ],
        [
            "url" => "https://img.icons8.com/color/48/000000/php.png",
            "name" => "PHP",
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $tool) {
            Tool::create($tool);
        }
    }
}
