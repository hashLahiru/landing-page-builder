<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentFieldValuesTable extends Migration
{
    public function up()
    {
        Schema::create('component_field_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_field_id')->constrained('component_fields');
            $table->text('value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('component_field_values');
    }
}
