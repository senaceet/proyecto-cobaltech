<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsSeeder extends Seeder
{
    // 50 Marcas
    static $brands = [
        'ACER',
        'ADATA',
        'AMD',
        'ARTIC',
        'ASRock',
        'ASUS',
        'be quiet',
        'Belkin',
        'BitFenix',
        'Cooler Master',
        'Corsair',
        'Cougar',
        'Creative',
        'Crucial',
        'EPSON',
        'EVGA',
        'FractalDesign',
        'G.Skill',
        'Generico',
        'Genius',
        'Gigabyte',
        'HP',
        'HyperX',
        'InWin',
        'Intel',
        'Kingston',
        'Lenovo',
        'LG',
        'Lian Li',
        'Logitech',
        'Microsoft',
        'MSI',
        'Noctua',
        'nVidia',
        'NZXT',
        'Phanteks',
        'PNY',
        'Razer',
        'ReDragon',
        'Rosewill',
        'Samsung',
        'Sapphire',
        'Seagate',
        'Seasonic',
        'Sennheiser',
        'StarTek',
        'Thermaltake',
        'Western Digital',
        'XFX',
        'Zotac'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$brands as $brand) {
            DB::table('brands')->insert([
                'name' => $brand
            ]);
        }
        /* 
        // 50 Marcas
        DB::table('brands')->insert(array(
            array(
                'name' => 'ACER',
            ),
            array(
                'name' => 'ADATA',
            ),
            array(
                'name' => 'AMD',
            ),
            array(
                'name' => 'ARTIC',
            ),
            array(
                'name' => 'ASRock',
            ),
            array(
                'name' => 'ASUS',
            ),
            array(
                'name' => 'be quiet',
            ),
            array(
                'name' => 'Belkin',
            ),
            array(
                'name' => 'BitFenix',
            ),
            array(
                'name' => 'Cooler Master',
            ),
            array(
                'name' => 'Corsair',
            ),
            array(
                'name' => 'Cougar',
            ),
            array(
                'name' => 'Creative',
            ),
            array(
                'name' => 'Crucial',
            ),
            array(
                'name' => 'EPSON',
            ),
            array(
                'name' => 'EVGA',
            ),
            array(
                'name' => 'FractalDesign',
            ),
            array(
                'name' => 'G.Skill',
            ),
            array(
                'name' => 'Generico',
            ),
            array(
                'name' => 'Genius',
            ),
            array(
                'name' => 'Gigabyte',
            ),
            array(
                'name' => 'HP',
            ),
            array(
                'name' => 'HyperX',
            ),
            array(
                'name' => 'InWin',
            ),
            array(
                'name' => 'Intel',
            ),
            array(
                'name' => 'Kingston',
            ),
            array(
                'name' => 'Lenovo',
            ),
            array(
                'name' => 'LG',
            ),
            array(
                'name' => 'Lian Li',
            ),
            array(
                'name' => 'Logitech',
            ),
            array(
                'name' => 'Microsoft',
            ),
            array(
                'name' => 'MSI',
            ),
            array(
                'name' => 'Noctua',
            ),
            array(
                'name' => 'nVidia',
            ),
            array(
                'name' => 'NZXT',
            ),
            array(
                'name' => 'Phanteks',
            ),
            array(
                'name' => 'PNY',
            ),
            array(
                'name' => 'Razer',
            ),
            array(
                'name' => 'ReDragon',
            ),
            array(
                'name' => 'Rosewill',
            ),
            array(
                'name' => 'Samsung',
            ),
            array(
                'name' => 'Sapphire',
            ),
            array(
                'name' => 'Seagate',
            ),
            array(
                'name' => 'Seasonic',
            ),
            array(
                'name' => 'Sennheiser',
            ),
            array(
                'name' => 'StarTek',
            ),
            array(
                'name' => 'Thermaltake',
            ),
            array(
                'name' => 'Western Digital',
            ),
            array(
                'name' => 'XFX',
            ),
            array(
                'name' => 'Zotac'
            ),
        )); 
        */
    }
}
