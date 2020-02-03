<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewTableShoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->float('price', 8 , 2);
            $table->string('description_es')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_por')->nullable();
            $table->string('description_sw')->nullable();
            $table->string('description_fr')->nullable();
            $table->string('heels')->nullable();
            $table->string('height_heels')->nullable();
            $table->string('height_platform')->nullable();
            $table->string('sole')->nullable();
            $table->string('chapped');
            $table->string('cover');
            $table->integer('hidden')->nullable();
            $table->string('preview_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes');
    }
}