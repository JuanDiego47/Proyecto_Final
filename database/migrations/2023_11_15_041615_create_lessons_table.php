<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_leccion");
            $table->string("hora_inicio");
            $table->string("hora_fin");
            $table->unsignedBigInteger("id_instructor");
            $table->unsignedBigInteger("id_disciplina");
            $table->unsignedBigInteger("id_salon");
            $table->foreign("id_instructor")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("id_disciplina")->references("id")->on("disciplines")->onDelete("cascade");
            $table->foreign("id_salon")->references("id")->on("classrooms")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
