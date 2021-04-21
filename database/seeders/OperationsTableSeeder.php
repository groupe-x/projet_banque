<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OperationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('operations')->delete();
        
        \DB::table('operations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_client' => 2,
                'montant' => '30000',
                'solde_initial' => '50000',
                'new_solde' => '80000',
                'id_type_op' => 1,
                'date' => '2021-04-21',
                'created_at' => '2021-04-21 15:19:02',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_client' => 2,
                'montant' => '5000',
                'solde_initial' => '80000',
                'new_solde' => '75000',
                'id_type_op' => 2,
                'date' => '2021-04-21',
                'created_at' => '2021-04-21 15:19:25',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_client' => 2,
                'montant' => '20000',
                'solde_initial' => '75000',
                'new_solde' => '55000',
                'id_type_op' => 2,
                'date' => '2021-04-21',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}