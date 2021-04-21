<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComptesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comptes')->delete();
        
        \DB::table('comptes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'numeroCompte' => 271853110493,
                'id_client' => 2,
                'solde' => 55000,
                'id_typecompte' => 1,
                'created_at' => '2021-04-21 14:39:31',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}