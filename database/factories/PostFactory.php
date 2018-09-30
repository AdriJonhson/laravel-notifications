<?php

use Faker\Generator as Faker;
use App\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'	=> 1,
        'title'		=> $faker->unique()->word,
        'body'		=> $faker->sentence(),
    ];
});
