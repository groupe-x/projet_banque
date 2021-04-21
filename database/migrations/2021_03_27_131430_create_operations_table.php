<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_client');
            $table->String('montant');
            $table->String('solde_initial');
            $table->String('new_solde');
            $table->unsignedBigInteger('id_type_op');
            $table->date('date');
            $table->foreign('id_client')
            ->references('id')
            ->on('client')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('id_type_op')
            ->references('id')
            ->on('type_operations')
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
        Schema::dropIfExists('operations');
    }
}
