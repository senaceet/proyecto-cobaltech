<?php

use Illuminate\Database\Seeder;
use App\Provider;
use Faker\Factory as Faker;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 20 proveedores
        for ($i=1 ; $i <=20 ; $i++) {            
            $provider=Provider::create([
                'businessname'=>$faker->company,
                'contact'=>$faker->name,
                'phone'=>$faker->phoneNumber,
                'extension'=>$faker->randomNumber($nbDigits = 4, $strict = false),
                'mobile'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'warehouse'=>$faker->address,
                'website'=>$faker->domainName,
                'email'=>$faker->companyEmail
            ]);
        }
    }
}
