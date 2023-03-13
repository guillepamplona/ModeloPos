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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula_cliente');
            $table->string('nombres_cliente', 75);
            $table->string('apellidos_cliente', 75);
            $table->integer('celular_cliente');
            $table->string('email_cliente', 75);
            $table->string('direccion_cliente', 75);
            $table->string('departamento_cliente', 75);
            $table->string('ciudad_cliente', 75);
            $table->string('barrio_cliente', 75);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
