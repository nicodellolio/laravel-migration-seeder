<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Carbon\Carbon;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $today = Carbon::now(2)->toFormattedDateString();

        for ($i=0; $i < 15; $i++) { 
            $train = new Train();
            $train->brand_company = $faker->lastName() . 'Rail';
            $train->date = $today;
            $train->departure_station = $faker->city();
            $train->arrive_station = $faker->city();
            $train->departure_time = $faker->time('H:i:s', '10:00:00');
            $train->arriving_time = $faker->time('H:i:s', '23:59:59');
            $train->train_code = $faker->randomNumber(5, true);
            $train->wagon_count = $faker->numberBetween(9, 18);
            $train->on_time = $faker->boolean();
            $train->save();
        }

    }
}
