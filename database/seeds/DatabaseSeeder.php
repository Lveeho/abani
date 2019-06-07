<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate=['addresses','address_user','brands','categories','cities','colors','color_product','countries','lots','migrations','orderdetails','orders','photos','pricerecords','products','producttypes','regions','reviews','review_user','roles','role_user','sales','stocklogs','suppliers','users'];
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach($this->toTruncate as $table){
            DB::table($table)->truncate();
        }
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(AddressUserTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
