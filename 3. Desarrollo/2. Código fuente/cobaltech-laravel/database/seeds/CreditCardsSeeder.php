<?php

use Illuminate\Database\Seeder;
use App\CreditCard;
use Faker\Factory as Faker;

class CreditCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 150 pagos con tarjeta crédito
        for ($i=1 ; $i <= 150 ; $i++) {
            $creditcard=CreditCard::create([
                'owner'=>$faker->name(),
                'number'=>$faker->creditCardNumber(),
                'duedate'=>$faker->creditCardExpirationDate(),
                'cvv'=>$faker->randomNumber($nbDigits = 3, $strict = false)
            ]);
        }
    }
}
