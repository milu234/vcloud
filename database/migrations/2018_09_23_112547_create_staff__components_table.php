<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff__components', function (Blueprint $table) {
            $table->increments('sc_id');
            $table->integer('id')->unsigned();
            $table->string('item_name');
            $table->integer('spare')->unsigned();;
            $table->integer('working')->unsigned();
            $table->integer('not_working')->unsigned();
            
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff__components');
    }
}
