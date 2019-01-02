<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsOptionsValuesToProductsOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products_options_values_to_products_options', function (Blueprint $table) {
            $table->increments('products_options_values_to_products_options_id');
            $table->integer('products_options_id');
            $table->integer('products_options_values_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_options_values_to_products_options');
    }
}
