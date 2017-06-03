<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(6),
        'short_description' => $faker->text(100),
        'description' => $faker->text(500),
        'start_date' => $faker->dateTimeThisMonth(),
        'end_date' => $faker->dateTimeThisMonth(),
        'event_date' => $faker->dateTimeThisMonth(),
        'display_order' => $faker->unique()->numberBetween(1, 100),
        'is_featured' => $faker->randomElement([0, 1]),
        'show_on_banner' => $faker->randomElement([0, 1]),
        'status' => $faker->randomElement([0, 1]),
    ];
});

$factory->define(App\Models\Video::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(6),
        'short_description' => $faker->text(100),
        'description' => $faker->text(500),
        'start_date' => $faker->dateTimeThisMonth(),
        'end_date' => $faker->dateTimeThisMonth(),
        'event_date' => $faker->dateTimeThisMonth(),
        'display_order' => $faker->unique()->numberBetween(1, 100),
        'status' => $faker->randomElement([0, 1]),
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->unique()->randomElement(['Punjab', 'India', 'World', 'Business', 'Politics', 'Top', 'Sports', 'Technology', 'Culture', 'Fashion', 'Environment']),
        'description' => $faker->text(500),
        'display_order' => $faker->unique()->numberBetween(1, 20),
        'status' => $faker->randomElement([0, 1]),
    ];
});
