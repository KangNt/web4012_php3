<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
     
        'name' => $faker->name,
        'birthday'=>$faker->date,
        'phone'=>$faker->randomDigit,
        'email'=>$faker->email,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'role'=>'1',
        'is_active'=>'1',
        
    ];
});
