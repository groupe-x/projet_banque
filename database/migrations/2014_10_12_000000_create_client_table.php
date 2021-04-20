<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('email')->unique();
            $table->string('password')->default('$2y$10$Z8f5e7ypX99tZXfzOt3R8uauHZtz/08Hwk87zttZ2g/fd0mOh1S4a');
            $table->string("num_piece")->default(' ');
            $table->String('civilite');
            $table->String('dateNaissance');
            $table->String('numero');
            $table->boolean('is_ok')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
