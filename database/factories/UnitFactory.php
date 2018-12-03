<?php

use Faker\Generator as Faker;

$factory->define(\App\Unit::class, function (Faker $faker) {
    return [
        'name' => $faker->bothify('Unit #?#?'),
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
