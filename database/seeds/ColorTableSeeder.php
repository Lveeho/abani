<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('colors')->insert([
            'color'=>'beige',
        ]);
        DB::table('colors')->insert([
            'color'=>'peachpuff',
        ]);
        DB::table('colors')->insert([
            'color'=>'rosybrown',
        ]);
        DB::table('colors')->insert([
            'color'=>'black',
        ]);
        DB::table('colors')->insert([
            'color'=>'white',
        ]);
        DB::table('colors')->insert([
            'color'=>'green',
        ]);
        DB::table('colors')->insert([
            'color'=>'yellow',
        ]);
        DB::table('colors')->insert([
            'color'=>'orange',
        ]);
        DB::table('colors')->insert([
            'color'=>'red',
        ]);
        DB::table('colors')->insert([
            'color'=>'pink',
        ]);
        DB::table('colors')->insert([
            'color'=>'purple',
        ]);
        DB::table('colors')->insert([
            'color'=>'blue',
        ]);
        DB::table('colors')->insert([
            'color'=>'gray',
        ]);
        DB::table('colors')->insert([
            'color'=>'transparent',
        ]);
        DB::table('colors')->insert([
            'color'=>'silver',
        ]);
        DB::table('colors')->insert([
            'color'=>'brown',
        ]);
        DB::table('colors')->insert([
            'color'=>'gold',
        ]);
    }
}
