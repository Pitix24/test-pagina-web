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
        Schema::table('books', function (Blueprint $table) {
             $table->string('project')->nullable(); // cambia el tipo y nombre según lo que necesites
                $table->string('manzana_lote')->nullable(); // cambia el tipo y nombre según lo que necesites
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {


        });
    }
};
