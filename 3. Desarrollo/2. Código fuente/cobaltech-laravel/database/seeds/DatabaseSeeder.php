<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DocTypesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(DeliveryStatusSeeder::class);
        $this->call(WarrantyStatusSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(CreditCardsSeeder::class);
        $this->call(DebitCardsSeeder::class);
        $this->call(CashSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(BillsSeeder::class);
        $this->call(ShippingsSeeder::class);
        $this->call(WarrantySeeder::class);
        $this->call(PaymentsSeeder::class);
    }
}
