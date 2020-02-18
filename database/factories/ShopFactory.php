<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'complex_name' => $faker->word,
        'address_line_1' => $faker->word,
        'address_line_2' => $faker->word,
        'city' => $faker->word,
        'state' => $faker->word,
        'zip' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
