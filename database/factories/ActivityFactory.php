<?php

use Faker\Generator as Faker;

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

$factory->define(App\Activity::class, function (Faker $faker) {
    static $password;

    return [
        'user_id' => $faker->user_id,
        'type' => $faker->type,
        'points'=> $faker->points,
        'completion' => $faker->completion,
        'code' => $faker->code,
        'meta' => [
            "activity_name" =>[
          
                "activity1" => $faker->realText(),
                "full1" => $faker->realText(800),
                "activity2" => $faker->realText(),
                "full2" => $faker->realText(800),
                "activity3" => $faker->realText(),
                "full3" => $faker->realText(800)
            
        ],],

        'meta1' => [

            "organizer" =>[

                "organizer1" => $faker->realText(),
                "full1" => $faker->realText(800),
                "organizer2" => $faker->realText(),
                "full2" => $faker->realText(800),
                "organizer3" => $faker->realText(),
                "full3" => $faker->realText(800)

            ],],

        'meta2' => [

            "venue" =>[
    
                "venue1" => $faker->realText(),
                "full1" => $faker->realText(800),
                "venue2" => $faker->realText(),
                "full2" => $faker->realText(800),
                "venue3" => $faker->realText(),
                "full3" => $faker->realText(800)
    
            ],],

        'meta3' => [

            "date" =>[
        
                "date1" => $faker->realText(),
                "full1" => $faker->realText(800),
                "date2" => $faker->realText(),
                "full2" => $faker->realText(800),
                "date3" => $faker->realText(),
                "full3" => $faker->realText(800)
        
            ],],
    ];
});
