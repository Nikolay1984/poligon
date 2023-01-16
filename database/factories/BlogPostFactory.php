<?php

use Faker\Generator as Faker;

$factory->define( Model::class, function ( Faker $faker ) {

    $title       = $faker->sentence( rand( 3, 8 ) );
    $text        = $faker->realText( rand( 1000, 4000 ) );
    $isPublished = rand( 1, 4 ) > 1;
    $created_at =  $faker->dateTimeBetween( '-3 month', '-2 month' );

    return [
        'category_id'  => rand( 1, 10 ),
        'user_id'      => ( rand( 1, 5 ) == 5 ) ? 1 : 2,
        'title'        => $title,
        'slug'         => str_slug( $title ),
        'excerpt'      => $faker->text( rand( 40, 100 ) ),
        'content_raw'  => $text,
        'content_html' => $text,
        'is_published' => $isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween( '-2 month', '-1 days' ) : null,
        'created_at' => $created_at,
        'updated_at' => $created_at
    ];


} );
