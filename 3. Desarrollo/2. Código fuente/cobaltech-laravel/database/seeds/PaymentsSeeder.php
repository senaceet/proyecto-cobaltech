<?php

use Illuminate\Database\Seeder;
use App\Payment;
use Faker\Factory as Faker;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 500 pagos
        for ($i=1 ; $i <= 500 ; $i++) {            
            $payment=Payments::create([
                'bills_id'=>
                    $faker->numberBetween($min=1,$max=500),
                'creditcards_id'=>
                    $faker->numberBetween($min=1,$max=150),
                'debitcards_id'=>
                    $faker->numberBetween($min=1,$max=150),
                'cash_id'=>
                    $faker->numberBetween($min=1,$max=200)
            ]);
        }
    }
}
