<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client')->delete();
        
        \DB::table('client')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'sminth',
                'prenoms' => 'lolipop',
                'email' => 'virtus225@gmail.com',
                'password' => '$2y$10$qXZv01Etb4zCt1MOAns1f.CMbwXRi4fI1vWMNZeNglKB4cPdW7JW2',
                'num_piece' => '12345677',
                'civilite' => 'marie',
                'dateNaissance' => '2021-04-18',
                'numero' => '88364552',
                'is_ok' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-04-17 15:13:34',
                'updated_at' => '2021-04-17 15:13:34',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'sminth',
                'prenoms' => 'lolipop',
                'email' => 'virtus225one@gmail.com',
                'password' => '$2y$10$Z8f5e7ypX99tZXfzOt3R8uauHZtz/08Hwk87zttZ2g/fd0mOh1S4a',
                'num_piece' => '12345678',
                'civilite' => 'marie',
                'dateNaissance' => '2021-04-08',
                'numero' => '88364403',
                'is_ok' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-04-20 21:17:20',
                'updated_at' => '2021-04-20 21:17:20',
            ),
        ));
        
        
    }
}