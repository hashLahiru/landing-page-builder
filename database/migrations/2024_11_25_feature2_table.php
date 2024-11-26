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
        Schema::create('new_feature2', function (Blueprint $table) {
            $table->id();
            $table->string('f2_title');
            $table->text('f2_description')->nullable();
  
            $table->string('f2_img1_url');
            $table->string('f2_text1');
            $table->string('f2_icon1');
            $table->string('f2_para1');
            $table->string('f2_button1_icon');
            $table->string('f2_button1_text');  
            $table->string('f2_button1_url');


            $table->string('f2_img2_url');
            $table->string('f2_text2');
            $table->string('f2_icon2');
            $table->string('f2_para2');
            $table->string('f2_button2_icon');
            $table->string('f2_button2_text');  
            $table->string('f2_button2_url');
            
            
            $table->string('f2_img3_url');
            $table->string('f2_text3');
            $table->string('f2_icon3');
            $table->string('f2_para3');
            $table->string('f2_button3_icon');
            $table->string('f2_button3_text');  
            $table->string('f2_button3_url');
            

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feature2');
    }
};
