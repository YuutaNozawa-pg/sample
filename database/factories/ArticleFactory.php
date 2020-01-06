<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => Str::random(10),
        'photo' => 'hoge1.png',
        'photo2' => 'hoge2.png'
    ];
});
