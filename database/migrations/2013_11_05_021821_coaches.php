<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class coaches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_profile');
            $table->string('coach_name');
            $table->string('coach_lastname');
            $table->string('coach_email')->unique();
            $table->string('coach_phone');
            $table->string('coach_user')->unique();
            $table->string('coach_password');

            $table->timestamps();
            $table->foreign('id_profile')->references('id')->on('profiles');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
}
