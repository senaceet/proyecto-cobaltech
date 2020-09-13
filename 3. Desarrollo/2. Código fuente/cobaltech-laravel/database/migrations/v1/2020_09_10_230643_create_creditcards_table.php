<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla TARJETA DE CRÉDITO
        - OMNER = Nombre del titular de la tarjeta de crédito
        - NUMBER = Número de la tarjeta de crédito
        - DUEDATE = Fecha de vencimiento de tarjeta de crédito
        - CVV = Código de verificación de la tarjeta de crédito
        */
        Schema::create('creditcards', function (Blueprint $table) {
            $table->id();
            $table->string('owner',25);
            $table->string('number',16);
            $table->date('duedate');
            $table->string('cvv',3);
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
        Schema::dropIfExists('creditcards');
    }
}
