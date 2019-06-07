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
        DB::table('address_user')->insert([
            'user_id'=>1,
            'address_id'=>1,
        ]);
        DB::table('address_user')->insert([
            'user_id'=>1,
            'address_id'=>2,
        ]);
    }
}
