<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 100 usuarios
        for($i=1 ; $i <= 100 ; $i++){
            $user=User::create([
                'document'=>$faker->unique()->ramdonNumber($nbDigits = 15),
                'name'=>$faker->name,
                'lastname'=>$faker->lastName,
                'email'=>$faker->unique()->email,
                'password'=>$faker->password,
                'address'=>$faker->address,
                'phone'=>$faker->phoneNumber,
                'mobile'=>$faker->phoneNumber,
                /*
                'roles_id'=>$faker->numberBetween($min=1, $max=2),
                'roles_id se controla abajo con un IF para controlar
                la cantidad de usuarios que son Administrador 
                */
                'cities_id'=>$faker->numberBetween($min=1, $max=30),
                'doctypes_id'=>$faker->numberBetween($min=1, $max=4),
                'products_id'=>$faker->numberBetween($min=1, $max=300)
            ]);
            if($i==20 || $i==40 || $i==60 || $i==80 || $i==100){
                DB::table('users')->insert([
                    'roles_id' => '1'
                ]);
            }
            else{
                DB::table('users')->insert([
                    'roles_id' => '2'
                ]);
            }
        }
    }
}
