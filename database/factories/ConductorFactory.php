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

$factory->define(App\Conductor::class, function (Faker $faker) {
	$arr = [
        'nombre' => $faker->name,
        'estado' => $faker->randomElements($array = array('activo','inactivo'), $count = 1)[0]
    ];
    //dd($arr['estado'][0]);
    return $arr;
});
