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
        Schema::table('empresa', function (Blueprint $table) {
            // Eliminar la columna 'contraseña'
            $table->dropColumn('contraseña');

            // Agregar la columna 'password'
            $table->string('password')->after('rublo'); // Cambia el orden si es necesario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empresa', function (Blueprint $table) {
            // Volver a agregar la columna 'contraseña'
            $table->string('contraseña')->after('rublo');

            // Eliminar la columna 'password' en el rollback
            $table->dropColumn('password');
        });
    }
};
