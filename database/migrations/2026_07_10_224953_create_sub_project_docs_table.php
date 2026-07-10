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
        Schema::create('sub_project_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_project_id')->constrained('sub_projects')->onDelete('cascade');
            $table->string('pdf');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps(); // <-- Agrega esto
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_project_docs');
    }
};
