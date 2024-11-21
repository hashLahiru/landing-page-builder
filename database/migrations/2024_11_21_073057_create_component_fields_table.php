<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('component_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_id')->constrained('components'); // Foreign key for the component
            $table->string('field_name'); // Field name for the component
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('component_fields');
    }
}
