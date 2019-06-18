<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'brand'=>'Ardell Lashes'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Beauty Bakerie'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Essie'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Gerard Cosmetics'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Inglot'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Jeffree Star Cosmetics'
        ]);
        DB::table('brands')->insert([
            'brand'=>'L.A. Girl'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Lilly Lashes'
        ]);
        DB::table('brands')->insert([
            'brand'=>"L'Oréal Paris"
        ]);
        DB::table('brands')->insert([
            'brand'=>'Milani'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Maybelline'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Ofra'
        ]);
        DB::table('brands')->insert([
            'brand'=>'TheBalm'
        ]);
        DB::table('brands')->insert([
            'brand'=>'W7 Cosmetics'
        ]);
        DB::table('brands')->insert([
            'brand'=>'Wet n Wild'
        ]);
    }
}
