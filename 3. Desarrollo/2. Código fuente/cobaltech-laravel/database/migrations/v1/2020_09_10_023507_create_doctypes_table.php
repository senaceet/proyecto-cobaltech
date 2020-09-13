<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla TIPO DE DOCUMENTO
        - ABBREVIATION = Abreviación conocida de ese tipo de documento
        - DOCTYPE = Nombre completo del tipo documento
        */
        Schema::create('doctypes', function (Blueprint $table) {
            $table->id();
            $table->string('abbreviation',3);
            $table->string('doctype',50);
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
        Schema::dropIfExists('doctypes');
    }
}
