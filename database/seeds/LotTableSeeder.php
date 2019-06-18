<?php

use Illuminate\Database\Seeder;

class LotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Lot',20)->create();

    }
}
