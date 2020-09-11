<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('description',255);
            $table->integer('stock',5)->unsigned();
            $table->string('picture',255);
            $table->float('price',8,2)->unsigned();
            $table->bigInteger('providers_id')->unsigned();
            $table->foreign('providers_id')->references('id')->on('providers');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->bigInteger('brands_id')->unsigned();
            $table->foreign('brands_id')->references('id')->on('brands');
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
        Schema::dropIfExists('products');
    }
}
