<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoesImgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes_imgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('img_path');
            $table->unsignedBigInteger('shoe_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('shoe_id')->references('id')->on('shoes');
            $table->foreign('category_id')->references('id')->on('img_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes_imgs');
    }
}
