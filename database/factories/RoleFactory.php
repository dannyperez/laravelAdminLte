<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Role::class, function (Faker $faker) {
    return [
        'name'=>'Super admin',
        'description' => $faker->word,
    ];
});
