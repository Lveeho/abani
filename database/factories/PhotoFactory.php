<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Photo::class, function (Faker $faker) {

    return [
        //
        'product_color_id'=>rand(1,25),
    ];
});
