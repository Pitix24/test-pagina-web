<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedByToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {

            $table->string('country')->default("lima"); // 
            $table->string('location')->default("KM 4.4 CTRA. HUARAL - SAYÁN"); // 
      
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropForeign(['updated_by']); // Elimina la relación de clave foránea
            $table->dropColumn('updated_by');    // Elimina la columna
        });
    }
}
