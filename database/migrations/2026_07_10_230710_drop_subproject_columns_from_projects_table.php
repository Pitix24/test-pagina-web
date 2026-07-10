<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Hacemos un bucle del 1 al 20 para borrar las 60 columnas
            $columnsToDrop = [];

            for ($i = 1; $i <= 20; $i++) {
                $columnsToDrop[] = "subproject_$i";
                $columnsToDrop[] = "subproject_image_$i";
                $columnsToDrop[] = "photo_$i";
            }

            // Eliminamos todas las columnas de una sola vez
            $table->dropColumn($columnsToDrop);
        });
    }

    public function down(): void
    {
        // En caso de que necesites revertir la migración (rollback)
        Schema::table('projects', function (Blueprint $table) {
            for ($i = 1; $i <= 20; $i++) {
                $table->string("subproject_$i")->nullable();
                $table->string("subproject_image_$i")->nullable();
                $table->string("photo_$i")->nullable();
            }
        });
    }
};
