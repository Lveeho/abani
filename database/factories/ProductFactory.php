<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=>rand(1,3),
        'producttype_id'=>rand(1,20),
        'brand_id'=>rand(1,15),
        'name' =>$faker->text($maxNbChars=10),
        'description'=>$faker->text($maxNbChars=200),
        'price'=>$faker->randomNumber(2),
        'code'=>$faker->randomNumber(8),
        'is_active'=>$faker->boolean,
    ];
});
