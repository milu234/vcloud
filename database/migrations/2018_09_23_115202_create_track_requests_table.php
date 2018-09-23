<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_requests', function (Blueprint $table) {
            $table->increments('track_id');
            $table->integer('request_id')->unsigned();
            $table->integer('do_id')->unsigned();
            $table->integer('avail_staff_id')->unsigned();
            $table->integer('status_id')->unsigned();

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
        Schema::dropIfExists('track_requests');
    }
}
