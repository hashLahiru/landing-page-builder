<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComponentNameAndImgToComponentsTable extends Migration
{
    public function up()
    {
        Schema::table('components', function (Blueprint $table) {
            $table->string('component_name')->after('description');
            $table->string('component_img')->after('component_name');
        });
    }

    public function down()
    {
        Schema::table('components', function (Blueprint $table) {
            $table->dropColumn(['component_name', 'component_img']);
        });
    }
}
