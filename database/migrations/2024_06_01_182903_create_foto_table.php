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
        Schema::create('foto', function (Blueprint $table) {
            $table->id('foto_id');
            $table->string('foto_nombre');
            $table->string('foto_descripcion');
            $table->string('foto_ruta');
            $table->unsignedBigInteger('album_id');
            $table->timestamps();
            // Creamos la llave foranea
            $table->foreign('album_id')->references('album_id')->on('album');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto');
    }
};
