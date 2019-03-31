<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});

