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
        Schema::create('entidades', function (Blueprint $table) {

            $table->id();

            $table->string('codigo',20)->unique();

            $table->string('nombre',200);

            $table->string('siglas',20);

            $table->string('ruc',13)->unique();

            $table->string('tipo',100);

            $table->enum('estado',[
                'Activo',
                'Inactivo'
            ])->default('Activo');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidades');
    }
};