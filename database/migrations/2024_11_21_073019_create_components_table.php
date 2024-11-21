<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Component name
            $table->text('description')->nullable(); // Component description
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('components');
    }
}
