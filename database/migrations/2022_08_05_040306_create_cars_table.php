<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->integer('miles_per_gallon')->nullable();
            $table->integer('cylinders');
            $table->integer('displacement');
            $table->integer('horsepower')->nullable();
            $table->integer('weight_in_lbs');
            $table->integer('acceleration');
            $table->date('year');
            $table->string('origin');
            $table->timestamps();
            $table->softDeletes();
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
};
