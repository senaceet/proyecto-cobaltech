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
            $table->enum('abbreviation',[
                'CC',
                'CE',
                'TP',
                'NIT'
            ]);
            $table->enum('doctype',[
                'Cédula de Ciudadanía',
                'Cédula de Extranjería',
                'Pasaporte',
                'Número de Identificación Tributaria'
            ]);
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
