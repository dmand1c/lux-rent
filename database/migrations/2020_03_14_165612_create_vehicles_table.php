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
            $table->string('vehicle_id')->unique();
            $table->primary('vehicle_id');
            $table->string('title');
            $table->string('chassis_nr');

            $table->string('brand_id');
            $table->foreign('brand_id')->references('brand_id')->on('brands');

            $table->string('vtype_id');
            $table->foreign('vtype_id')->references('vtype_id')->on('vehicle_types');

            $table->string('inv_id');
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
