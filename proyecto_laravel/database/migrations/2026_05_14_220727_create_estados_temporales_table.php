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
        Schema::create('estado_temporals', function (Blueprint $table) {
            $table->id();
            // Restricciones de Llaves Foráneas (Foreign Keys)
            $table->foreignId('servidor_id')->constrained('servidores')->onDelete('cascade');
            $table->foreignId('cat_estado_id')->constrained('cat_estados')->onDelete('restrict');
            
            $table->text('respuesta_html')->nullable();
            $table->timestamp('fecha_evento')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_temporals');
    }
};
