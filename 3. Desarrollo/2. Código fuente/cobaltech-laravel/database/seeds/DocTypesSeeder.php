<?php

use Illuminate\Database\Seeder;
use App\DocType;
use Faker\Factory as Faker;

class DocTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        // 4 tipos de documento y sus abreviaciones
        for ($i=1 ; $i <= 4 ; $i++) {
            $doctype=DocType::create([
                'abbreviation'=>$faker->randomElement([
                    'CC',
                    'CE',
                    'TP',
                    'NIT'
                ])
            ]);
            if ($faker == 'CC'){
                DB::table('doctypes')->insert([
                    'doctype' => 'Cédula de Ciudadanía'
                ]);
            }
            if ($faker == 'CE'){
                DB::table('doctypes')->insert([
                    'doctype' => 'Cédula de Extranjería'
                ]);
            }
            if ($faker == 'TP'){
                DB::table('doctypes')->insert([
                    'doctype' => 'Pasaporte'
                ]);
            }
            if ($faker == 'NIT'){
                DB::table('doctypes')->insert([
                    'doctype' => 'Número de Identificación Tributaria'
                ]);
            }
            /* 
            'doctype'=>$faker->randomElement([
                'Cédula de Ciudadanía',
                'Cédula de Extranjería',
                'Pasaporte',
                'Número de Identificación Tributaria'
            ])
            */
        }
    }
}
