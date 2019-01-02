<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersBasketAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('customers_basket_attributes', function (Blueprint $table) {
         $table->increments('customers_basket_attributes_id');
         $table->integer('customers_basket_id');
         $table->integer('customers_id')->index();
         $table->Text('products_id');
         $table->integer('products_options_id');
         $table->integer('products_options_values_id');
         $table->string('session_id',255);

       }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('customers_basket_attributes');   
    }
}
