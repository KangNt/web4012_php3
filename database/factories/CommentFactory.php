<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id'=>$faker->randomDigit,
        'content'=>$faker->realText,
        'user_id'=>$faker->randomDigit,
        'is_active'=>$faker->randomDigit,
    ];
});
