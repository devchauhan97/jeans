<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTotalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('orders_total', function (Blueprint $table) {
                $table->increments('orders_total_id');
                $table->integer('orders_id');
                $table->string('title',255);
                $table->string('text',255);
                $table->decimal('value',15,4);
                $table->string('class',32);
                $table->integer('sort_order');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_total');
    }
}
