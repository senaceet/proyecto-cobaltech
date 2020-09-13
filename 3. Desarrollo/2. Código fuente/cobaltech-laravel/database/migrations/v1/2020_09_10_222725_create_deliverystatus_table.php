<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverystatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla ESTADO DE ENVÍO
        - STATUS = Listado, cada estado describé brevemente el estado del envío
        */
        Schema::create('deliverystatus', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['En trámite','Enviado','Entregado']);
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
        Schema::dropIfExists('deliverystatus');
    }
}
