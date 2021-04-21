<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VirementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('virements')->delete();
        
        \DB::table('virements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_client' => 2,
                'numcompte_origin' => 271853110493,
                'numcompte_destin' => 78253695145896,
                'montant' => 20000,
                'date_virement' => '2021-04-21',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}