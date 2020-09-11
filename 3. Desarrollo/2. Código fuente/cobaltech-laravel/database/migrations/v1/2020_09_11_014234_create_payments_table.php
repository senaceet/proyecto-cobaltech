<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bills_id')->unsigned();
            $table->foreign('bills_id')->references('id')->on('bills');
            $table->bigInteger('creditcards_id')->unsigned();
            $table->foreign('creditcards_id')->references('id')->on('creditcards');
            $table->bigInteger('debitcards_id')->unsigned();
            $table->foreign('debitcards_id')->references('id')->on('debitcards');
            $table->bigInteger('cash_id')->unsigned();
            $table->foreign('cash_id')->references('id')->on('cash');
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
        Schema::dropIfExists('payments');
    }
}
