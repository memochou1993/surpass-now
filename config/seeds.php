<?php

return [

    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    |
    |
    |
    */

    'users' => [
        'id' => 1,
        'name' => 'Test User',
        'sex' => 1,
        'age' => 25,
        'height' => 180,
        'weight' => 65.0,
        'email' => 'homestead@test.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ],

    'categories' => [
        'id' => 1,
        'name' => 'Test Category',
    ],

    'items' => [
        'id' => 1,
        'name' => 'Test Item',
    ],

    'units' => [
        'id' => 1,
        'name' => '次',
    ],

    'records' => [
        'frequency' => 0.5,
        'completed' => false,
    ],

];
