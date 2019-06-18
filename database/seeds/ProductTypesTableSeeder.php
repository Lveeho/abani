<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('producttypes')->insert([
            'type'=>'blush',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'bronzer',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'concealer',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'contour',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'spray',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'foundation',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'highlight',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'powder',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'primer',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'liner',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'gloss',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'balm',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'lipstick',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'liquid lipstick',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'brows',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'eyeliner',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'primer',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'eyeshadow',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'false lashes',
        ]);
        DB::table('producttypes')->insert([
            'type'=>'mascara',
        ]);
    }
}
