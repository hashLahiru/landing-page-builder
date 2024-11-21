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
        Schema::create('header', function (Blueprint $table) {
            $table->id();
            $table->string('background_image_url');
            $table->string('title');
            $table->text('description');
            $table->string('video_url');
            $table->string('watch_video_text');
            $table->string('download_text');
            $table->string('icon_class')->default('fa fa-play');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header');
    }
};
