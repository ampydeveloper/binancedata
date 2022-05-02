<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('symbol, 50');
            $table->string('priceChange, 50');
            $table->string('priceChangePercent, 50');
            $table->string('weightedAvgPrice, 50');
            $table->string('prevClosePrice, 50');
            $table->string('lastPrice, 50');
            $table->string('lastQty, 50');
            $table->string('bidPrice, 50');
            $table->string('bidQty, 50');
            $table->string('askPrice, 50');
            $table->string('askQty, 50');
            $table->string('openPrice, 50');
            $table->string('highPrice, 50');
            $table->string('lowPrice, 50');
            $table->string('volume, 50');
            $table->string('quoteVolume, 50');
            $table->string('openTime, 50');
            $table->string('closeTime, 50');
            $table->integer('firstId');
            $table->integer('lastId');
            $table->integer('count');
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
        Schema::dropIfExists('data');
    }
};
