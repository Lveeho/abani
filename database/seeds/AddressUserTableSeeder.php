<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('address_city_region_country_user')->insert([
            'user_id'=>1,
            'address_id'=>1,
            'city_id'=>1,
            'region_id'=>1,
            'country_id'=>1,
        ]);
        DB::table('address_city_region_country_user')->insert([
            'user_id'=>2,
            'address_id'=>2,
            'city_id'=>1,
            'region_id'=>1,
            'country_id'=>1,
        ]);

    }
}
