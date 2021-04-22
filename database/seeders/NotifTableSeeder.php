<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notif')->delete();
        
        \DB::table('notif')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_client' => 2,
                'icon' => 'zmdi zmdi-email-open',
                'msg' => 'Votre Compte à été activé',
                'route' => 'home',
                'created_at' => '2021-04-21 19:05:35',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}