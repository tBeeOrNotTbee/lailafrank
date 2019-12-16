<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_stock', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('shoe_id');
            $table->string('size');
            $table->bigInteger('quantity');
            $table->bigInteger('place_id');
            $table->bigInteger('color_id');

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
        Schema::dropIfExists('table_stock');
    }
}
