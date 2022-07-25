<?php

use Faker\Generator;
use Elsayed85\Translation\Language;

$factory->define(Language::class, function (Generator $faker) {
    return [
        'language' => $faker->word,
        'name' => $faker->word,
    ];
});
