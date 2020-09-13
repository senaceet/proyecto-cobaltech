<?php

use Illuminate\Database\Seeder;
use App\DeliveryStatus;
use Faker\Factary as Faker;

class DeliveryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 3 estados de envíos
        for ($i=1 ; $i <= 500 ; $i++) {
            $deliverystatus=DeliveryStatus::create([
                'status'=>$faker->randomElement(['En trámite','Enviado','Entregado'])
            ]);
        }
    }
}
