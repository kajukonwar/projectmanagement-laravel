<?php
use Faker\Generator as Faker;

$factory->define(App\Task::class, function(Faker $faker)

{

	return [
		'name' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'project_id' => $faker->numberBetween($min = 1, $max = 5)
	];
});