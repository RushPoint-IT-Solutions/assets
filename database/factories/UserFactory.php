<?php

<<<<<<< HEAD
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
=======
use Illuminate\Support\Str;
use Faker\Generator as Faker;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

<<<<<<< HEAD
$factory->define(User::class, function (Faker $faker) {
=======
$factory->define(App\User::class, function (Faker $faker) {
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
<<<<<<< HEAD
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
=======
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
        'remember_token' => Str::random(10),
    ];
});
