<?php
use Faker\Generator as Faker;

$factory->define(App\Post::class, function(Faker $faker) {

	return [

		'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'task_id' => $faker->numberBetween($min=1, $max=5),
		'user_id' => $faker->numberBetween($min=1, $max=5)

	];

});