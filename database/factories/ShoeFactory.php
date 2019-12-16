<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shoe;
use Faker\Generator as Faker;

$factory->define(Shoe::class, function (Faker $faker) {
    $preview_img=[
        'shoe_1.jpg',
        'shoe_2.jpg',
        'shoe_3.jpg',
        'shoe_4.jpg',
        'shoe_5.jpg',
        'shoe_6.jpg'
    ];

    return [
        'name'=>$faker->name,
        'price'=>$faker->randomFloat(2, 6000, 12000),
        'description_es'=>$faker->text(200),
        'description_en'=>$faker->text(200),
        'description_por'=>$faker->text(200),
        'description_sw'=>$faker->text(200),
        'description_fr'=>$faker->text(200),
        'heels'=>$faker->word(),
        'height_heels'=>$faker->randomNumber(1),
        'height_platform'=>$faker->randomNumber(1),
        'sole'=>$faker->word(),
        'chapped'=>$faker->word(),
        'cover'=>$faker->word(),
        'preview_img'=>$faker->randomElement($preview_img)
    ];
});
