<?php

use Illuminate\Database\Seeder;

class institutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\institution', 10)->create();
        factory('App\User', 10)->create();
    }
}
