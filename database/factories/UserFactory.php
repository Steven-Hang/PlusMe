<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => 'FN',
        'last_name' => 'LN',
        'date_of_birth' => '1993-06-08',
        'contact_number' => '0478174422',
        'licence_number' => '0009870534',
        'terms' => '1',
        'is_activated' => '1',
        'email' => $faker->unique()->safeEmail,
        'remember_token' => str_random(10),
        'password' => Hash::make('123Password') // secret
    ];
});
