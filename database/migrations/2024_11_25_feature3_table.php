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
        Schema::create('new_feature3', function (Blueprint $table) {
            $table->id();
            $table->string('f3_title');

            $table->string('f3_icon1');
            $table->string('f3_text1');
            $table->string('f3_para1');
            $table->string('f3_button1_text');  
            $table->string('f3_button1_url');

            $table->string('f3_icon2');
            $table->string('f3_text2');
            $table->string('f3_para2');
            $table->string('f3_button2_text');  
            $table->string('f3_button2_url');

            $table->string('f3_icon3');
            $table->string('f3_text3');
            $table->string('f3_para3');
            $table->string('f3_button3_text');  
            $table->string('f3_button3_url');

            $table->string('f3_icon4');
            $table->string('f3_text4');
            $table->string('f3_para4');
            $table->string('f3_button4_text');  
            $table->string('f3_button4_url');

            $table->string('f3_img_url');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feature3');
    }
};
