<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActionRecorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('action_recorder', function (Blueprint $table) {
        $table->increments('id');
        $table->string('module',255)->index();
        $table->integer('user_id')->index()->nullable();
        $table->string('user_name',255)->nullable();
        $table->string('identifier',255)->index();
        $table->char('success',1)->nullable();
        $table->dateTime('date_added')->index();
        
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('action_recorder');  
    }
}
