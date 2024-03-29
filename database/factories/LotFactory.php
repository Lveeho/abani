<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(\App\Lot::class, function (Faker $faker) {
    return [
        //
        'code' => $faker->unique()->randomNumber($nbDigits=8),
        'manufactured'=>$faker->date($format='Y-m-d',$max='now'),
        'expiry'=>$faker->dateTimeBetween('now','+4 years'),
        'ingredients'=>$faker->text($maxNbChars=50),
        'volume'=>$faker->randomNumber(1),
        'quantity'=>rand(1,500)
    ];
});
