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
        Schema::create('popup_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_espanol');
            $table->string('titulo_ingles');
            $table->text('cuerpo_espanol');
            $table->text('cuerpo_ingles');
            $table->string('imagen')->nullable();
            $table->string('link')->nullable();
            $table->enum('estado', [0, 1])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popup_notifications');
    }
};
