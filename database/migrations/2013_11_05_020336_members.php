<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table){

            $table->id('member_id');
            $table->unsignedBigInteger('id_profile');
            $table->string("member_name");
            $table->string("member_lastname");
            $table->string("member_email")->unique();
            $table->string("member_phone");
            $table->string("member_state");
            $table->string("member_user")->unique();
            $table->string("member_password");
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
        Schema::dropIfExists('members');
    }
}
