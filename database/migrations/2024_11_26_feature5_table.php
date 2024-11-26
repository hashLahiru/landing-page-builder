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
        Schema::create('new_feature5', function (Blueprint $table) {
            $table->id();

            $table->string('f5_img_url');
            $table->string('f5_title');

            $table->string('f5_icon1');
            $table->string('f5_text1');
            $table->string('f5_para1');  

            $table->string('f5_icon2');
            $table->string('f5_text2');
            $table->string('f5_para2');  

            $table->string('f5_icon3');
            $table->string('f5_text3');
            $table->string('f5_para3'); 


            $table->string('f5_icon4');
            $table->string('f5_text4');
            $table->string('f5_para4'); 

       

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feature5');
    }
};
