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
                'email' => 'virtus225one@gmail.com',
                'password' => '$2y$10$qXZv01Etb4zCt1MOAns1f.CMbwXRi4fI1vWMNZeNglKB4cPdW7JW2',
                // 'type_de_compte' => 'epargne',
                'civilite' => 'marie',
                'dateNaissance' => '2021-04-18',
                'numero' => '88364552',
                'is_ok' => 0,
                'remember_token' => NULL,
                'created_at' => '2021-04-17 15:13:34',
                'updated_at' => '2021-04-17 15:13:34',
            ),
        ));


    }
}
