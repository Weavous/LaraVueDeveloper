<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\DeveloperTool;

class DeveloperToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = DeveloperTool::factory(100)->make();

        foreach ($resource as $relationship) {
            DeveloperTool::firstOrCreate($relationship->toArray());
        }
    }
}
