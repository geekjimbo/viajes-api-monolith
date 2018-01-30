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

$factory->define(App\Ruta::class, function (Faker $faker) {
	$lugares = array("alajuela", "heredia", "cartago", "limón", "san josé", "guanacaste", "puntarenas");
    return [
        'origen' => $faker->randomElements($array = $lugares, $count = 1)[0],
        'destino' => $faker->randomElements($array = $lugares, $count = 1)[0],
        "pasajero_id" => $faker->numberBetween($min = 1, $max = 20),
        "conductor_id" => $faker->numberBetween($min = 1, $max = 20)
    ];
});
