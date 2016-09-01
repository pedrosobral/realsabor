<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = ['AMERICANAS', 'C&A',
            'CENTAURO', 'CLARO', 'EXPRESSO CIDADAO', 'MARISA', 'BANCO DO BRASIL',
            'NAGEM', 'O BOTICARIO', 'PASTELANDIA', 'RABELO', 'RIACHUELO',
            'RICARDO ELETRO', ]),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'cpf'  => $faker->randomElement($array = [$faker->numerify('###########')]),

    ];
});

$factory->define(App\Meals::class, function (Faker\Generator $faker) {
    return [
        'price' => $faker->randomFloat($nbMaxDecimals = null, $min = 10, $max = 50),
    ];
});
