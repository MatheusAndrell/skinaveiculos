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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->foreignId('marca_id')->constrained('marcas');
            $table->string('modelo');
            $table->integer('quilometragem');
            $table->string('cor');
            $table->boolean('aceita_troca');
            $table->boolean('ipva_pago');
            $table->unsignedSmallInteger('ano');
            $table->string('placa');
            $table->text('sobre');
            $table->string('preco');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
