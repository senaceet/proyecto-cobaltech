<?php

use Illuminate\Database\Seeder;
use App\Role;
use Faker\Factory as Faker;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 2 Roles
        for ($i=1 ; $i <= 2 ; $i++) {
            $role=Role::create([
                'role'=>$faker->randomElement(['Administrador','Usuario'])
            ]);
        }
    }
}