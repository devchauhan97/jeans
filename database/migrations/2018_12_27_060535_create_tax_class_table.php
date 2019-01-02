<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tax_class', function (Blueprint $table) {
            $table->increments('tax_class_id');
            $table->string('tax_class_title',255);
            $table->string('tax_class_description',255);
            $table->dateTime('last_modified')->nullable();
            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_class');
    }
}
