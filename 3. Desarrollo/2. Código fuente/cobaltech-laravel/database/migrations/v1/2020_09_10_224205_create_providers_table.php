<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla PROVEEDORES
        - BUSINESSNAME = Razón social de la empresa
        - CONTACT = Nombre de la persona encargada
        - POSITION = Cargo de la persona encargada
        - PHONE = Número Teléfononico de contacto
        - EXTENSION = Extensión del número teléfonico (de existir)
        - MOBILE = Número celular de contacto
        - ADDRESS = Dirección física de las oficinas de la empresa
        - WAREHOUSE = Dirección fisica de las bodegas de la empresa
        - WEBSITE = dirección URL de la empresa
        - EMAIL = Correo electronico de la empresa
        */
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('businessname',50);
            $table->string('contact',60)->nullable();
            $table->string('position',30)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('extension',5)->nullable();
            $table->string('mobile',20)->nullable();
            $table->string('address',100)->nullable();
            $table->string('warehouse',150)->nullable();
            $table->string('website',100)->nullable();
            $table->string('email',75)->nullable();
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
        Schema::dropIfExists('providers');
    }
}
