<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        DB::table('users')->insert([
            'id' => 1,
            'use_name' => "Juan", 'use_apellido' => 'Velazco', 'use_dni' => '231341232', 'email' => 'algo@algo.com', 'use_tel' => 98231232, 'password' => bcrypt('123456')
        ]);


        DB::table('users')->insert([
            'id' => 2,
            'use_name' => "Pedro", 'use_apellido' => 'Suarez', 'use_dni' => '231341232', 'email' => 'otro@otro.com', 'use_tel' => 98231232, 'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'id' => 3,

            'use_name' => "Pablo", 'use_apellido' => 'Marmol', 'use_dni' => '231341232', 'email' => 'marol@marolalgo.com', 'use_tel' => 98231232, 'password' => bcrypt('123456')
        ]);
    }
}
