<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\WorkingHour;
use Faker\Generator as Faker;

$factory->define(WorkingHour::class, function (Faker $faker) {

    return [
        'employee_id' => $faker->randomDigitNotNull,
        'date' => $faker->word,
        'start_time' => $faker->word,
        'finish_time' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
