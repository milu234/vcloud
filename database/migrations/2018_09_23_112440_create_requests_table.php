<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('request_id');
            $table->integer('id')->unsigned();
            $table->integer('request_type')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('item_name');
            $table->integer('item_count');

            $table->foreign('id')->references('id')->on('users');
            $table->foreign('status_id')->references('status_id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
