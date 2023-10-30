<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 12; $i++) {
            $train = new Train();
            $train->company =  $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('now', '+10 days');
            $train->arrival_time = $faker->dateTimeBetween('now', '+10 days');
            $train->train_code = $faker->bothify('???-###');
            $train->carriage_number = $faker->numberBetween(1, 13);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();

            $train->save();
        }
    }
}
