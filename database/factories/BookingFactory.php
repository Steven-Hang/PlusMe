<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
use App\User;
use App\Location;

$factory->define(App\Booking::class, function (Faker $faker) {
    $start_date = \Carbon\Carbon::now()->addDays($faker->randomElement([1,2,3,4,5,6,7,8,9]));
    $end_date= $start_date->copy()->addDays($faker->randomElement([1,2,3,4,5,6,7,8,9]));

    

    return [
       'start_date' => $start_date->format('Y-m-d'),
       'end_date' => $end_date->format('Y-m-d'),
       'price' => $faker->randomNumber(2),
       'user_id' => $faker->randomNumber(2),
       'location_id' => $faker->randomNumber(1),
    ];   
});
