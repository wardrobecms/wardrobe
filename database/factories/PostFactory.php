<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'admin_id' => function () {
            return factory(\App\Admin::class)->create()->id;
        },
        'body' => $faker->paragraphs(3, true)
    ];
});
