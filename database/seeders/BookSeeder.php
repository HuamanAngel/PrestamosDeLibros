<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert de los libros
        DB::table('books')->insert([
            'id' => 1, 
            'title' => "La biblia de quimica", 
            'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 
            'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 1
        ]);

        DB::table('books')->insert([
            'id' => 2, 'title' => "La biblia de fisica", 'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 1

        ]);

        DB::table('books')->insert([
            'id' => 3, 'title' => "La biblia de algoritmica", 'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 1

        ]);

        DB::table('books')->insert([
            'id' => 4, 'title' => "La biblia de matemica", 'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 2

        ]);

        DB::table('books')->insert([
            'id' => 5, 'title' => "La biblia de literatura", 'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 2

        ]);

        DB::table('books')->insert([
            'id' => 6, 'title' => "La biblia de mandarin", 'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 1

        ]);

        DB::table('books')->insert([
            'id' => 7, 'title' => "La biblia de ingles", 'descripcion' => 'Este libro contiene todos los conocimeintos necesarios', 'resumen' => 'Este libro contiene todos los conocimeintos necesarios'
            ,"id_autor" => 2

        ]);
    }
}
