<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
use App\User;
use App\Location;


$factory->define(App\Vehicles::class, function (Faker $faker) {
    return [
       'name_of_car'=>$faker->randomElement(['Honda','Toyota', 'BMW']),
       'type'=>$faker->randomElement(['suv','hatchback','sedan']),
       'no_of_seats'=>$faker->randomElement([4,5,8]),
       'isAvailable'=>$faker->randomElement([0,1])
    ];
});

