<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoachDiscipline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coachDiscipline', function (Blueprint $table){
            $table->id('id_rel_ID');
            $table->unsignedBigInteger('coach_id');
            $table->unsignedBigInteger('discipline_id');
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
        Schema::dropIfExists('coachDiscipline');
    }
}
