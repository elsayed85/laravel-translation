<?php

use Faker\Generator;
use Elsayed85\Translation\Language;
use Elsayed85\Translation\Translation;

$factory->define(Translation::class, function (Generator $faker) {
    return [
        'language_id' => function () {
            return factory(Language::class)->create()->id;
        },
        'group' => $faker->word,
        'key' => $faker->word,
        'value' => $faker->sentence,
    ];
});

$factory->state(Translation::class, 'group', function (Generator $faker) {
    return [
        'language_id' => function () {
            return factory(Language::class)->create()->id;
        },
        'group' => $faker->word,
        'key' => $faker->word,
        'value' => $faker->sentence,
    ];
});

$factory->state(Translation::class, 'single', function (Generator $faker) {
    return [
        'language_id' => function () {
            return factory(Language::class)->create()->id;
        },
        'group' => 'single',
        'key' => $faker->word,
        'value' => $faker->sentence,
    ];
});
