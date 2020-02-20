<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Post;
use App\Category;
use App\Address;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

//user
// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

// Category
// $factory->define(Category::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'slug' => $faker->title,
//         'position' => $faker->randomDigit,
//     ];
// });

// Address
$factory->define(Address::class, function (Faker $faker) {
    return [
        'street' => $faker->streetAddress,
        'user_id' => $faker->randomDigit,
    ];
});

// Post
$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 50),
        'user_id' => $faker->randomDigit,
        'description' => $faker->text($maxNbChars = 200),
        'status' => $faker->boolean,
    ];
});
