<?php
use Faker\Generator as Faker;

$factory->define(App\Project::class, function(Faker $faker)
{
	return [

		'name' => $faker->name,
		'description' => $faker->text($maxNbChars = 200) ,
		'user_id' => $faker->numberBetween($min = 1, $max = 5),
	];
});