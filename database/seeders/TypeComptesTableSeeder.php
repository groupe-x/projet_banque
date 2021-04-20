<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeComptesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type_comptes')->delete();
        
        \DB::table('type_comptes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'epargne',
                'interet' => '0',
                'created_at' => '2021-04-20 17:18:21',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'courant',
                'interet' => '0',
                'created_at' => '2021-04-20 17:22:13',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}