<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('size');
            $table->integer('quantity');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('shoe_id');
            $table->unsignedBigInteger('place_id');
            $table->foreign('shoe_id')->references('id')->on('shoes');
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('color_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
}
