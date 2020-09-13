<?php

use Illuminate\Database\Seeder;
use App\DebitCard;
use Faker\Factory as Faker;

class DebitCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 150 pagos con tarjeta débito
        for ($i=1 ; $i <= 150 ; $i++) {
            $debitcard=DebitCard::create([
                'transaction'=>$faker->randomNumber($nbDigits = 16, $strict = false)
            ]);
        }
    }
}
