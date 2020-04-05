<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {

    return [
        'shop_id' => $faker->randomDigitNotNull,
        'client_id' => $faker->randomDigitNotNull,
        'employee_id' => $faker->randomDigitNotNull,
        'service_id' => $faker->randomDigitNotNull,
        'date' => $faker->word,
        'time' => $faker->word,
        'comments' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
