<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Celulares",
            'icon' => 'fa fa-mobile'
        ]);
        DB::table('categories')->insert([
            'name' => "Electronicos & Aplicaciones",
            'icon' => 'fa fa-laptop'
        ]);
        DB::table('categories')->insert([
            'name' => "Autos",
            'icon' => 'fa fa-automobile'
        ]);
        DB::table('categories')->insert([
            'name' => "Muebles",
            'icon' => 'fa fa-wheelchair'
        ]);
        DB::table('categories')->insert([
            'name' => "Motocicletas",
            'icon' => 'fa fa-motorcycle'
        ]);
        DB::table('categories')->insert([
            'name' => "Mascotas",
            'icon' => 'fa fa-paw'
        ]);
        DB::table('categories')->insert([
            'name' => "Libros, deportes & Entretimiento",
            'icon' => 'fa fa-book'
        ]);
        DB::table('categories')->insert([
            'name' => "Moda",
            'icon' => 'fa fa-asterisk'
        ]);
        DB::table('categories')->insert([
            'name' => "Juegos",
            'icon' => 'fa fa-gamepad'
        ]);
        DB::table('categories')->insert([
            'name' => "Servicios",
            'icon' => 'fa fa-shield'
        ]);
        DB::table('categories')->insert([
            'name' => "Trabajos",
            'icon' => 'fa fa-at'
        ]);
        DB::table('categories')->insert([
            'name' => "Bienes Raíces",
            'icon' => 'fa fa-home'
        ]);
    }
}
