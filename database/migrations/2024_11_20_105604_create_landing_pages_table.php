<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title');
            $table->text('description');
            $table->string('background_image_url');
            $table->string('video_url');
            $table->string('watch_video_text');
            $table->string('download_text');
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
