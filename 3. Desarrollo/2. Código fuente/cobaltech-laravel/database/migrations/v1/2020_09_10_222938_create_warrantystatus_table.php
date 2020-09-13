<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantystatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla ESTADO DE GARANTÍA
        - STATUS = Listado, cada estado describé brevemente el estado de la garantía
        */
        Schema::create('warrantystatus', function (Blueprint $table) {
            $table->id();
            $table->enum('status',[
                'En proceso',
                'Garantía rechazada',
                'Producto reparado',
                'Se cambio el producto',
                'Reembolso'
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
        Schema::dropIfExists('warrantystatus');
    }
}
