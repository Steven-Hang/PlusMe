<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\User::class, function (Faker $faker) {
    return [
       'first_name' => $faker->firstName,
       'last_name' => $faker->lastName,
       'date_of_birth' => Carbon::create('2000', '01', '01'),
       'contact_number' => '0123456789',
       'email' => $faker->unique()->email,
       'password' => bcrypt('Test123'),
       'licence_number' => '0123456789',
       'is_activated' => '1',
       'terms' => '1',
       'is_admin' => '0'
    ];
});
