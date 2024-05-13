<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        b:for ($i=0; $i < 15; $i++) { 
            $train = new Train();
            $train->brand_company = $faker();
            $train->departure_station = $faker();
            $train->arrive_station = $faker();
            $train->departure_time = $faker();
            $train->arriving_time = $faker();
            $train->train_code = $faker();
            $train->wagon_count = $faker();
            $train->on_time = $faker();
            $train->canceled = $faker();
            $train->save();

        }

    }
}
