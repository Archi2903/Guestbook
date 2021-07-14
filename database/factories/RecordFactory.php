<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Record;
use Faker\Generator as Faker;

$factory->define(Record::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'message'=>$faker->realText(100),
        'created_at'=>$faker->dateTimeBetween('2013-01-01','2021-07-13'),
    ];
});
