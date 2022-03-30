<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'       => 'First Title',
        'description' => 'First Post Description',    
        'content'     => 'First Post Content',
        'is_active'   => 1,
        'slug'        => 'first-post',    
        'user_id'     => 1
    ];
});
