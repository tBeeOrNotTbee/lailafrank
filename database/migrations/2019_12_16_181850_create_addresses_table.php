<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('surname');
            $table->string('street');
            $table->string('number');
            $table->string('floor')->nullable();
            $table->string('apartment');
            $table->string('city');
            $table->string('province');
            $table->string('post_code');
            $table->string('country');
            $table->bigInteger('telephone')->nullable();
            $table->bigInteger('cellphone')->nullable();
            $table->text('details')->nullable();
            $table->unsignedBigInteger('idci')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
