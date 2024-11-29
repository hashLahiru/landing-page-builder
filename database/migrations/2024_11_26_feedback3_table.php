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
        Schema::create('new_feedback3', function (Blueprint $table) {
            $table->id();

            $table->string('fb3_title');

            $table->string('fb3_img1');
            $table->string('fb3_text1');
            $table->string('fb3_icon1');
            $table->text('fb3_para1');
   

            $table->string('fb3_img2');
            $table->string('fb3_text2');
            $table->string('fb3_icon2');  
            $table->text('fb3_para2');

            $table->string('fb3_img3');
            $table->string('fb3_text3');
            $table->string('fb3_icon3');  
            $table->text('fb3_para3');
        
            $table->string('fb3_img4');
            $table->string('fb3_text4');
            $table->string('fb3_icon4');  
            $table->text('fb3_para4');

            $table->string('fb3_img5');
            $table->string('fb3_text5');
            $table->string('fb3_icon5');
            $table->text('fb3_para5');
   
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feedback3');
    }
};
