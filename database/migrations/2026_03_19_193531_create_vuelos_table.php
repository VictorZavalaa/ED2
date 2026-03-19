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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('horaSalidaTerminal');
            $table->string('horaEstimadaLlegada');
            $table->string('terSalida');
            $table->string('terLlegada');
            $table->string('ciudadSalida');
            $table->string('ciudadLlegada');
            $table->string('nomPiloto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
