<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 300 productos
        for ($i=1 ; $i <= 300 ; $i++) {            
            $product=Product::create([
                'name'=>$faker->word,
                'description'=>$faker->text($maxNbChars = 255),
                'stock'=>$faker->randomNumber($nbDigits = 3, $strict = false),
                'picture'=>$faker->imageUrl($width, $height, 'cats'),
                'price'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 99999999),
                'providers_id'=>
                    $faker->numberBetween($min=1,$max=20),
                'categories_id'=>
                    $faker->numberBetween($min=1,$max=26),
                'brands_id'=>
                    $faker->numberBetween($min=1,$max=50)
            ]);
        }
    }
}
