<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            'region_id'=>'1',
            'city'=>'Middelkerke',
            'postalcode'=>8430,
        ]);
    }
}
