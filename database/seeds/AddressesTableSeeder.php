<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->insert([
            'city_id'=>1,
            'street'=>'Petunialaan',
            'streetnumber'=>18,
        ]);
        DB::table('addresses')->insert([
            'city_id'=>1,
            'street'=>'Petunialaan',
            'streetnumber'=>19,
        ]);
    }
}
