<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {
        $faker = Faker::create('it_IT');
        for ($i=0; $i < 20; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(["Trenitalia", "Italo", "Trenord", "Ferrovie del Sud Est", "Ferrovie dello Stato Italiane", "Ferrovie Emilia Romagna"]);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();

            do {
                $departure_time = $faker->dateTimeBetween('-1 month', '+1 month');
                $arrival_time = $faker->dateTimeBetween($departure_time, '+1 month');
            } while ($departure_time >= $arrival_time);
            $newTrain->departure_time = $departure_time;
            $newTrain->arrival_time = $arrival_time;
            
            $newTrain->train_code = $faker->regexify('[A-Z0-9]{10}');
            $newTrain->carriages = $faker->numberBetween(0, 21);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean(15);
            $newTrain->price = $faker->randomFloat(2, 5, 100);
            $newTrain->save();
        }
    }
}
