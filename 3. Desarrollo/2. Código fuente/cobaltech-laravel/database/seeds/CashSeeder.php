<?php

use Illuminate\Database\Seeder;
use App\Cash;
use Faker\Factory as Faker;

class CashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 200 pagos en efectivo
        for ($i=1 ; $i <= 200 ; $i++) {
            $cash=Cash::create([
                'description'=>$faker->randomNumber($nbDigits = 30, $strict = false)
            ]);
        }
    }
}
