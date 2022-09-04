<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();

            $table->string('numero_archivo');
            $table->date('fecha_ingreso');

            $table->foreignId('caratulas_id')
                  ->nullable()
                  ->constrained('caratulas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();

            $table->string('calles');

            $table->foreignId('depedencias_id')
                  ->nullable()
                  ->constrained('dependencias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();

            $table->string('respuesta')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->text('Description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivos');
    }
};
