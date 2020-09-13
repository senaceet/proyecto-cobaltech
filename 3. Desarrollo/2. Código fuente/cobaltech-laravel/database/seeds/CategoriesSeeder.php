<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    // 26 Categorias
    static $categories = [
        'Adaptadores y cables',
        'Cámaras',
        'Chasis/cajas/torres',
        'Controles para juegos',
        'Diademas',
        'Discos duros HDD',
        'Enfriadores CPU Cooler',
        'Fuentes de poder PSU',
        'Impresoras',
        'Monitores',
        'Memorias RAM',
        'Microfonos',
        'Mouse y padmouse',
        'Parlantes',
        'Pasta térmica',
        'PC de escritorio',
        'Portátiles',
        'Procesadores CPU',
        'Servidores',
        'Tarjetas de sonido',
        'Tarjetas de video GPU',
        'Tarjetas madre MainBoard',
        'Teclados',
        'Tiras LED',
        'Unidades de estado solido SSD',
        'Ventiladores'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
