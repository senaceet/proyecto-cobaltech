<?php

use Illuminate\Database\Seeder;
use App\Warranty;
use Faker\Factory as Faker;

class WarrantySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 20 garantías
        for($i=1 ; $i<=20 ; $i++){
            $warranty=Warranty::create([
                'entry'=>$faker->date,
                'description'=>$faker->text($maxNbChars = 300),
                'bills_id'=>$faker->numberBetween($min=1,$max=500),
                'warrantystatus_id'=>$faker->numberBetween($min=1,$max=5)
            ]);
        }
    }
}
