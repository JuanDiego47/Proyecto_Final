<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function(Blueprint $table){
            $table->id();
            $table->date('class_date');
            $table->time('time_start_class');
            $table->time('time_end_class');
            $table->unsignedBigInteger('coach_id');
            $table->unsignedBigInteger('discipline_id');
            $table->integer('num_students_class')->default(0);
            $table->timestamps();

            $table->foreign('coach_id')->references('id')->on('coaches');
            $table->foreign('discipline_id')->references('id')->on('disciplines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
