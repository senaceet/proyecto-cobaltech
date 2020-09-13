<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla TARJETA DÉBITO
        - TRANSACTION = Número de identificación de la trasacción PSE
        */
        Schema::create('debitcards', function (Blueprint $table) {
            $table->id();
            $table->string('transaction',16);
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
        Schema::dropIfExists('debitcards');
    }
}
