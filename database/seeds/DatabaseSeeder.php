<?php

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
        $this->call(generateLeague::class);
        $this->call(generateTeams::class);
        $this->call(Import_matches::class);
    }
}
