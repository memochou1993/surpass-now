<?php

use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->bothify('Category #?#?'),
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
