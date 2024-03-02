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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table-> integer('idcliente');
            $table-> integer('idfuncionario');
            $table-> integer('idquarto');
            $table-> enum('situacao', ['Pago', 'Pendente']);
            $table-> double('valorTotal', 8,2);
            $table-> date('datasaida');
            $table-> timestamp('dataentrada');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
