<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductsDownloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products_download', function (Blueprint $table) {
                $table->increments('orders_products_download_id');
                $table->integer('orders_id')->index()->default('0');
                $table->integer('orders_products_id')->default('0');
                $table->string('orders_products_filename',255);
                $table->integer('download_maxdays')->default('0');
                $table->integer('download_count')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products_download');
    }
}
