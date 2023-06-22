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
        Schema::create('despachos', function (Blueprint $table) {
            $table->id();
            $table->string('producto');
            $table->integer('peso_tara');
            $table->integer('peso_bruto');
            $table->integer('peso_neto');
            $table->date('fecha_peso');
            $table->date('fecha_despacho');
            $table->string('transportista');
            $table->string('cliente');
            $table->string('piloto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despachos');
    }
};
