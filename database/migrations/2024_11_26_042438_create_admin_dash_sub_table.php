<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDashSubTable extends Migration
{
    public function up()
    {
        Schema::create('admin_dash_sub', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('main_id');
            $table->string('name');
            $table->string('route')->nullable();
            $table->timestamps();

            $table->foreign('main_id')
                ->references('id')
                ->on('admin_dash_main')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_dash_sub');
    }
}
