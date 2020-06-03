<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Fornecedor::class, function (Faker $faker) {
    return ['NomeCompanhia' => $faker->name,
            'NomeContato'   => $faker->name,
            'TituloContato' => $faker->title,
            'Endereco'      => $faker->address,
            'Cidade'        => $faker->city,
            'Regiao'        => $faker->locale,
            'cep'           => $faker->postcode,
            'Pais'          => $faker->country,
            'Telefone'      => $faker->phoneNumber,
            'Fax'           => $faker->phoneNUmber,
            'website'       => $faker->url
        ];
});
