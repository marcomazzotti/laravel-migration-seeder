<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "company" => "trenitalia",
                "departure_station" => "Milano Centrale",
                "arrival_station" => "Roma Termini",
                "departure_time" => "12:00:00",
                "arrival_time" => "15:00:00",
                "train_code" => 111,
                "carriages_number" => 15,
                "on_time" => true,
                "deleted" => false,
            ]
        ];

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->company = $train["company"];
            $new_train->departure_station = $train["departure_station"];
            $new_train->arrival_station = $train["arrival_station"];
            $new_train->departure_time = $train["departure_time"];
            $new_train->arrival_time = $train["arrival_time"];
            $new_train->train_code = $train["train_code"];
            $new_train->carriages_number = $train["carriages_number"];
            $new_train->on_time = $train["on_time"];
            $new_train->deleted = $train["deleted"];
            $new_train->save();
        }
    }
}
