<?php

use Illuminate\Database\Seeder;
use App\WarrantyStatus;
use Faker\Factory as Faker;

class WarrantyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 20 estados de garantía
        for ($i=1 ; $i <= 20 ; $i++) {
            $warrantystatus=WarrantyStatus::create([
                'status'=>$faker->randomElement([
                    'En proceso',
                    'Garantía Rechazada',
                    'Producto reparado',
                    'Se cambio el producto',
                    'Reembolso'
                ])
            ]);
        }
    }
}