<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrBeateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 
        Tabla USUARIOS
        - DOCUMENT = Número documento de identificación del usuario
        - NAME = Nombre(s) del usuario
        - LASTNAME = Apellido(s) del usuario
        - EMAIL = Correo electrónico del usuario
        - PASSWORD = Contraseña de acceso del usuario
        - ADDRESS = Dirección de envío del usuario
        - PHONE = Número telefónico del usuario
        - MOBILE = Número celular del usuario
        */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('document',15)->unique();
            $table->string('name',40);
            $table->string('lastname',40);
            $table->string('email',40)->unique();
            $table->string('password',20);
            $table->string('address',50);
            $table->string('phone',9);
            $table->string('mobile',10);
            $table->bigInteger('roles_id')->unsigned();
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->bigInteger('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities');
            $table->bigInteger('doctypes_id')->unsigned();
            $table->foreign('doctypes_id')->references('id')->on('doctypes');
            $table->bigInteger('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products');
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
        Schema::dropIfExists('users');
    }
}
