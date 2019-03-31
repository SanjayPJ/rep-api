
<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'company' => $faker->company,
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});

