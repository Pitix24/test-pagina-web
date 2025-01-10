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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('image_1')->nullable();
            $table->string('detail')->nullable();


            $table->string('country'); // 
            $table->string('location')->nullable(); //
            $table->string('land')->nullable(); //
            $table->string('land_count')->nullable(); //
            
            $table->string('map_1')->nullable(); //
            $table->string('map_2')->nullable(); //
            $table->string('photo_1')->nullable(); //
            $table->string('photo_2')->nullable(); //
            $table->string('photo_3')->nullable(); //
            $table->string('photo_4')->nullable(); //
            $table->string('photo_5')->nullable(); //
            $table->string('photo_6')->nullable(); //
            $table->string('photo_7')->nullable(); //
            $table->string('photo_8')->nullable(); //
            $table->string('photo_9')->nullable(); //
            $table->string('photo_10')->nullable(); //
            
            $table->string('video_1')->nullable(); //
            $table->string('video_2')->nullable(); //
            $table->string('video_3')->nullable(); //
            $table->string('video_4')->nullable(); //
            $table->string('video_5')->nullable(); //
            $table->string('video_6')->nullable(); //
            $table->string('video_7')->nullable(); //
            $table->string('video_8')->nullable(); //
            $table->string('video_9')->nullable(); //
            $table->string('video_10')->nullable(); //
            
            $table->string('tourist_1')->nullable(); //
            $table->string('tourist_2')->nullable(); //
            $table->string('tourist_3')->nullable(); //
            $table->string('tourist_4')->nullable(); //
            $table->string('tourist_5')->nullable(); //
            $table->string('tourist_6')->nullable(); //

            $table->string('tourist_image_1')->nullable(); //
            $table->string('tourist_image_2')->nullable(); //
            $table->string('tourist_image_3')->nullable(); //
            $table->string('tourist_image_4')->nullable(); //
            $table->string('tourist_image_5')->nullable(); //
            $table->string('tourist_image_6')->nullable(); //
        
            $table->string('subproject_1')->nullable(); //
            $table->string('subproject_2')->nullable(); //
            $table->string('subproject_3')->nullable(); //
            $table->string('subproject_4')->nullable(); //
            $table->string('subproject_5')->nullable(); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
