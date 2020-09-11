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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('businessname',25);
            $table->string('contact',50);
            $table->string('position',25);
            $table->string('phone',50);
            $table->string('extension',25);
            $table->string('mobile',60);
            $table->string('address',100);
            $table->string('warehouse',150);
            $table->string('website',50);
            $table->string('email',40);
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
