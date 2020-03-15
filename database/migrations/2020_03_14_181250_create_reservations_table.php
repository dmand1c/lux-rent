<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('reservation_id');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->integer('inv_id')->unsigned();
            $table->foreign('inv_id')->references('inv_id')->on('inventory');
            $table->dateTime('from_date');
            $table->dateTime('to_date');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
