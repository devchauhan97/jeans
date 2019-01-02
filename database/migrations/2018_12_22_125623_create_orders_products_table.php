<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->increments('orders_products_id');
            $table->integer('orders_id')->index();
            $table->integer('products_id')->index();
            $table->string('products_model',12)->nullable();
            $table->string('products_name',64);
            $table->decimal('products_price',15,2);
            $table->decimal('final_price',15,2);
            $table->decimal('products_tax',7,0);
            $table->integer('products_quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
