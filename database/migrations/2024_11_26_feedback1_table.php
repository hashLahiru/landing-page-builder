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
        Schema::create('new_feedback1', function (Blueprint $table) {
            $table->id();

            $table->string('fb1_img_url');
            $table->string('fb1_title');
            $table->string('fb1_description');

            $table->string('fb1_icon1');
            $table->string('fb1_para1');
            $table->string('fb1_text1');  
            $table->string('fb1_usertext1');
            $table->string('fb1_profile1');  

            $table->string('fb1_icon2');
            $table->string('fb1_para2');
            $table->string('fb1_text2');  
            $table->string('fb1_usertext2');
            $table->string('fb1_profile2'); 

            $table->string('fb1_icon3');
            $table->string('fb1_para3');
            $table->string('fb1_text3');  
            $table->string('fb1_usertext3');
            $table->string('fb1_profile3'); 
       

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feedback1');
    }
};
