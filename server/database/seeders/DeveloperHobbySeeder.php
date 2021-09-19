<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\DeveloperHobby;

class DeveloperHobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = DeveloperHobby::factory(100)->make();

        foreach ($resource as $relationship) {
            DeveloperHobby::firstOrCreate($relationship->toArray());
        }
    }
}
