<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Status;

class StatusSeeder extends Seeder
{
    private array $data = [
        [
            "name" => "Active"
        ],
        [
            "name" => "Completed"
        ],
        [
            "name" => "Pending"
        ],
        [
            "name" => "Scheduled"
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $status) {
            Status::create($status);
        }
    }
}
