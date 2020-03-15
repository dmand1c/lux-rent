<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicles_id');
            $table->string('title');
            $table->string('chassis_nr');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('brand_id')->on('brands');
            $table->integer('vtype_id')->unsigned();
            $table->foreign('vtype_id')->references('vtype_id')->on('vehicle_types');
            $table->integer('inv_id')->unsigned();
            $table->foreign('inv_id')->references('inv_id')->on('inventory');    
            $table->string('category');
            $table->string('transmission');
            $table->string('fuel');
            $table->integer('power');
            $table->integer('mileage');
            $table->integer('nr_doors');
            $table->integer('nr_seats');
            $table->year('production_year');
            $table->string('driving_licence');
            $table->text('loading_space');
            $table->string('registration_plates');
            $table->date('registration_expiration_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
