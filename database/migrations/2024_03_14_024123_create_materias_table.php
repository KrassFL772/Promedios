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
        Schema::create('materias', function (Blueprint $table) {
            $table->id('Materias_ID');
            $table->String('Nombre', 50);
            $table->unsignedInteger('id_tarea');
            $table->foreign('id_tarea')->references('Tarea_ID')->on('tareas');
            $table->unsignedInteger('id_actividad');
            $table->foreign('id_actividad')->references('Actividad_ID')->on('actividades');
            $table->unsignedInteger('id_evidencia');
            $table->foreign('id_evidencia')->references('Evidencia_ID')->on('evidencias');
            $table->unsignedInteger('id_examen');
            $table->foreign('id_examen')->references('Examen_ID')->on('examenes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
