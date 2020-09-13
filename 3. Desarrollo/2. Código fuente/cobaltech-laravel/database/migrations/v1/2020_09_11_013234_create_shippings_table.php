<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla ENVÍOS
        - TRACKINGCODE = Guía de rastreo generado por la empresa de enviós
        */
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('trackingcode',15)->nullable();
            $table->bigInteger('bills_id')->unsigned();
            $table->foreign('bills_id')->references('id')->on('bills');
            $table->bigInteger('deliverystatus_id')->unsigned();
            $table->foreign('deliverystatus_id')->references('id')->on('deliverystatus');
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
        Schema::dropIfExists('shippings');
    }
}
