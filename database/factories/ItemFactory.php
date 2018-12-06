<?php

use Faker\Generator as Faker;

$factory->define(\App\Item::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'name' => $faker->bothify('Item #?#?'),
    ];
});
