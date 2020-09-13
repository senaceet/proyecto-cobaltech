<?php

use Illuminate\Database\Seeder;
use App\City;
use Faker\Factory as Faker;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 30 ciudades
        for ($i=1 ; $i <= 30 ; $i++) {
            $city=City::create([
                'name'=>$faker->city()
            ]);
        }
    }
}
