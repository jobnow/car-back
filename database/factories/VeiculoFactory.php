<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Veiculo::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'marca' => $faker->name,
        'modelo' => $faker->name,
    ];
});
