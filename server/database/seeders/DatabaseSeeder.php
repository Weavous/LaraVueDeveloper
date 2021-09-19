<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HobbySeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(StatusSeeder::class);

        $this->call(DeveloperSeeder::class);

        $this->call(DeveloperToolSeeder::class);
        $this->call(DeveloperHobbySeeder::class);

        $this->call(UserSeeder::class);
    }
}
