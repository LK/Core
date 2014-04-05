<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$start = $faker->dateTimeThisYear();
			$end = $start->add(new DateInterval('P2D'));

			Hackathon::create([
				'name' => $faker->word,
				'begins' => Carbon::instance($start)->toDateTimeString(),
				'ends' => Carbon::instance($end)->toDateTimeString(),
				'description' => $faker->text,
				'owner' => User::orderBy(DB::raw('RAND()'))->first()->id
			]);
		}
	}

}
