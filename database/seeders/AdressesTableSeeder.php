<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('adresses')->delete();
        
        \DB::table('adresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ville' => 'Abidjan',
                'detail' => 'deux plateau',
                'id_client' => 2,
                'created_at' => '2021-04-21 16:15:38',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}