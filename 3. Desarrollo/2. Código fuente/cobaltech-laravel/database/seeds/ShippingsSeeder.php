<?php

use Illuminate\Database\Seeder;
use App\Shipping;
use Faker\Factory as Faker;

class ShippingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 500 envíos
        for ($i=1 ; $i <= 500 ; $i++) {
            $shipping=Shipping::create([
                'trackingcode'=>$faker->unique()->randomNumber($nbDigits = 15, $strict = false),
                'bill_id'=>
                    $faker->numberBetween($min=1, $max=500),
                'deliverystatus_id'=>
                    $faker->numberBetween($min=1, $max=3),
            ]);
        }
    }
}
