<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday'=>$faker->date,
        'phone'=>$faker->randomDigit,
        'email'=>$faker->email,
        'password'=>bcrypt($faker->password),
        'role'=>'1',
        'is_active'=>'1',
    ];
});
