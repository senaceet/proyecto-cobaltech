<?php

use Illuminate\Database\Seeder;
use App\Bill;
use Faker\Factory as Faker;

class BillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 500 facturas
        for ($i=1 ; $i <= 500 ; $i++) {
            $bill=Bill::create([
                'sale'=>$faker->date(),
                // FAKER TEMPORAL EN TOTAL
                // Total almacena el calculo de cantidad*valor de los productos
                // al ser falso no lo podemos calcular
                'total'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 99999999),
                // users_id para 50 usuarios
                'users_id'=>$faker->numberBetween($min=1, $max=50),
                // products_id para 200 productos
                'products_id'=>$faker->numberBetween($min=1, $max=200)
            ]);
        }
    }
}
