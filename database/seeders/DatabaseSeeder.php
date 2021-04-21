<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ClientTableSeeder::class);
        $this->call(TypeComptesTableSeeder::class);
        $this->call(ComptesTableSeeder::class);
        $this->call(TypeOperationsTableSeeder::class);
        $this->call(OperationsTableSeeder::class);
        $this->call(VirementsTableSeeder::class);
    }
}
