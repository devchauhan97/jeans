<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products_attributes', function (Blueprint $table) {
            $table->increments('orders_products_attributes_id');
            $table->integer('orders_id')->index(); 
            $table->integer('orders_products_id');
            $table->integer('products_id');
            $table->string('products_options',32);
            $table->string('products_options_values',32);
            $table->decimal('options_values_price',15,2);
            $table->char('price_prefix',1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products_attributes');
    }
}
