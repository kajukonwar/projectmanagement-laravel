<?php
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function(Faker $faker) {

	return [

		'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'user_id' => $faker->numberBetween($min=1, $max=5),
		'commentable_id' => $faker->numberBetween($min=1, $max=5),
		'commentable_type'=> $faker->word
	];
});