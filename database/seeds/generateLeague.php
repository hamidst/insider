<?php

use Illuminate\Database\Seeder;

class generateLeague extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('leagues')->insert(
            [
                [
                    'id'    => 1,
                    'name' => 'champions League',
                    'year'  => 2019
                ]
            ]
        );
    }
}
