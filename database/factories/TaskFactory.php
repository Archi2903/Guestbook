<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tasks;
use Faker\Generator as Faker;

$factory->define(Tasks::class, function (Faker $faker) {
    $arrayTasks=['Learning English','Practice English','Lisen Music','Run','Study Korean'];
    return [
        'tasks'=>$faker->randomElement($arrayTasks),
    ];
});
