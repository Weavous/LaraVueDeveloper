<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::factory(25)->create();
    }
}
