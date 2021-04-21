<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeOperationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type_operations')->delete();
        
        \DB::table('type_operations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'depot',
                'created_at' => '2021-04-21 14:58:24',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'retrait',
                'created_at' => '2021-04-21 14:58:36',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}