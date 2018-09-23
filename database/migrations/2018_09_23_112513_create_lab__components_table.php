<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab__components', function (Blueprint $table) {
            $table->increments('lc_id');
            $table->integer('lab_id')->unsigned();
            $table->string('item_name');
            $table->integer('spare')->unsigned();;
            $table->integer('working')->unsigned();
            $table->integer('not_working')->unsigned();
            
            $table->foreign('lab_id')->references('lab_id')->on('labs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab__components');
    }
}
