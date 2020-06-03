<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Produto::class, function (Faker $faker) {
    return ['NomeProduto' => $faker->name,
            'QuantidadePorUnidade' => $faker->randomNumber(2),
            'PrecoUnitario' => $faker->randomFloat(2, 1, 10),
            'UnidadesEmEstoque' => $faker->randomNumber(2),
            'UnidadesEmOrdem' => $faker->randomNumber(2),
            'NivelDeReposicao' => $faker->randomNumber(2)];
});
