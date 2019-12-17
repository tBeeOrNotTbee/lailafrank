<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->unsignedBigInteger('shipping_service')->nullable();
            $table->unsignedBigInteger('payment_order_id')->nullable();

            $table->foreign('address_id')->references('id')->on('address');
            $table->foreign('shipping_service_id')->references('id')->on('shipping_services');
            $table->foreign('payment_order_id')->references('id')->on('payment_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_methods');
    }
}
