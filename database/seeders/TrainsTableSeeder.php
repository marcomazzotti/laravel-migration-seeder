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
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departures_date = $faker->dateTimeInInterval("-2 days", "+4 days");
            $new_train->departure_time = $faker->time("H:i:s");
            $new_train->arrival_time = $faker->time("H:i:s");
            $new_train->train_code = $faker->randomNumber(4, true);
            $new_train->carriages_number = $faker->numberBetween(5, 15);
            $new_train->on_time = $faker->boolean();
            $new_train->deleted;
            $new_train->save();
        }
    }
}
