<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla GARANTÍAS
        - ENTRY = Fecha de ingreso de la reclamación por garantía
        - DESCRIPTION = Descripción detallada del estado del producto que ingresa por garantía
        */
        Schema::create('warranty', function (Blueprint $table) {
            $table->id();
            $table->date('entry')->nullable();
            $table->string('description',300)->nullable();
            $table->bigInteger('bills_id')->unsigned();
            $table->foreign('bills_id')->references('id')->on('bills');
            $table->bigInteger('warrantystatus_id')->unsigned();
            $table->foreign('warrantystatus_id')->references('id')->on('warrantystatus');
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
        Schema::dropIfExists('warranty');
    }
}
