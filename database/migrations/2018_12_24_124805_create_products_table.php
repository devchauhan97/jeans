<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('products_id');
            $table->integer('products_quantity');
            $table->string('products_model',255)->index()->nullable();
            $table->mediumText('products_image')->nullable();
            $table->decimal('products_price',15,2);
            $table->dateTime('products_date_added')->index();
            $table->dateTime('products_last_modified')->nullable();
            $table->dateTime('products_date_available')->nullable();
            $table->string('products_weight',255);
            $table->string('products_weight_unit',255);
            $table->tinyInteger('products_status');
            $table->integer('products_tax_class_id');
            $table->integer('manufacturers_id')->nullable();
            $table->integer('products_ordered')->default('0');
            $table->integer('products_liked');
            $table->integer('low_limit');
            $table->tinyInteger('is_feature')->default('0');
            $table->string('products_slug',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
