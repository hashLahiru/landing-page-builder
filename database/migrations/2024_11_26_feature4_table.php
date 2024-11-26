<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('new_feature4', function (Blueprint $table) {
            $table->id();

            $table->string('f4_title');
            $table->string('f4_description');

            $table->string('f4_icon1');
            $table->string('f4_text1');
            $table->string('f4_para1');  

            $table->string('f4_icon2');
            $table->string('f4_text2');
            $table->string('f4_para2');  

            $table->string('f4_icon3');
            $table->string('f4_text3');
            $table->string('f4_para3'); 

            $table->string('f4_img_url');  
        

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feature4');
    }
};
