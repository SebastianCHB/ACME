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
        Schema::create('proyectos', function(Blueprint $table){
        $table->id();
        $table->foreignId('user_id')->constrained('users');
        $table->string('nombre_proyecto');
        $table->string('descripcion');
        $table->foreignId('zone_id')->constrained('zones');
        $table->date('fecha_inicio');
        $table->date('fecha_entrega');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
