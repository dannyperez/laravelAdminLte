<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Permission::class, function (Faker $faker) {
    return [
        'name'=>'Super Autoridad',
        'routes'=>implode(',',\App\Services\PermissionService::InitRoutes()->map(function($route){
            return $route->routeRule;
        })->toArray())
    ];
});
