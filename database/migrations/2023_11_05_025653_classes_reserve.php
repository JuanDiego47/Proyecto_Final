<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassesReserve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classesReserve', function(Blueprint $table){
            $table->id('reserve_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('coach_id');

            $table->timestamps();

            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('coach_id')->references('id')->on('coaches');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classesReserve');
    }
}
