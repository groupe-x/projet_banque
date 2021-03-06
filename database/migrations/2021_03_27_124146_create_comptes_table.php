<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('numeroCompte');
            $table->unsignedBigInteger('id_client');
            $table->bigInteger('solde');
            $table->unsignedBigInteger('id_typecompte')->default(2);
            $table->foreign('id_typecompte')
            ->references('id')
            ->on('type_comptes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_client')
            ->references('id')
            ->on('client')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('comptes');
    }
}
