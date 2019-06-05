<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agence_id');
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->date('aviability_date');
            $table->string('color')->nullable();
            $table->string('delivery_place');
            $table->string('fuel');
            $table->string('model_id');
            $table->string('fuel_policy');
            $table->string('image');
            $table->string('luggage');
            $table->boolean('mileage_unlimited');
            $table->double('price');
            $table->integer('seats');
            $table->string('status')->nullable();
            $table->string('transmission');
            $table->string('type');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
