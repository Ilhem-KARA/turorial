<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $word1 = $faker->word;
    return [
        'name' => $word1,
        'slug' => Str::slug($word1),
    ];
});
