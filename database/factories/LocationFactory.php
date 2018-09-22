<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
       'description'=>$faker->text(200),
       'city'=>$faker->city,
       'state'=>$faker->state,
       'zip'=>$faker->postcode,
       'address'=>$faker->address,
       'lat'=>$faker->latitude(-37.814,-37.915047),
       'lng' => $faker->longitude(144.96332,145.129272)
    ];
});
