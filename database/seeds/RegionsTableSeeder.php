<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('regions')->insert([
            'region'=>'West-Vlaanderen',
        ]);
        DB::table('regions')->insert([
            'region'=>'Antwerpen',
        ]);
        DB::table('regions')->insert([
            'region'=>'Limburg',
        ]);
        DB::table('regions')->insert([
            'region'=>'Oost-Vlaanderen',
        ]);
        DB::table('regions')->insert([
            'region'=>'Vlaams-Brabant',
        ]);
        DB::table('regions')->insert([
            'region'=>'Henegouwen',
        ]);
        DB::table('regions')->insert([
            'region'=>'Luik',
        ]);
        DB::table('regions')->insert([
            'region'=>'Luxemburg',
        ]);
        DB::table('regions')->insert([
            'region'=>'Namen',
        ]);
        DB::table('regions')->insert([
            'region'=>'Waals-Brabant',
        ]);
    }
}
