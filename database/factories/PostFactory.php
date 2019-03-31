<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});

