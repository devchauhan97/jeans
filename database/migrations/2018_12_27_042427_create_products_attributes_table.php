<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products_attributes', function (Blueprint $table) {
            $table->increments('products_attributes_id');
            $table->integer('products_id')->index();
             $table->integer('options_id'); 
             $table->integer('options_values_id');
             $table->decimal('options_values_price',15,2);
             $table->char('price_prefix',1);
             $table->tinyInteger('is_default')->default('0');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_attributes');
    }
}
