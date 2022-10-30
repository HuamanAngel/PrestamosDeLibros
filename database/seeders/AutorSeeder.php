<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autors')->insert([
            'id' => 1, 'Nombre' => "Pedro", 'Apellido' => 'Castillo', 'Fecha_Nacimiento' => '1990-10-10', 'Foto' => 'https://static.wikia.nocookie.net/doblaje/images/2/26/Pedro_Picapiedra_AM.jpg/revision/latest?cb=20141112210009&path-prefix=es'
        ]);
        DB::table('autors')->insert([
            'id' => 2, 'Nombre' => "Vargas", 'Apellido' => 'Llosa', 'Fecha_Nacimiento' => '1990-10-10', 'Foto' => 'https://www.swissinfo.ch/resource/image/46543860/landscape_ratio16x9/1920/1080/e9dc93e4360c211cc869c9295ac0b9fd/E66F49B5ABB18830C6851AB7CF383D65/image_doc-9893p7.jpg'
        ]);
    }
}
