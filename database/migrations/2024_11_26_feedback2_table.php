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
        Schema::create('new_feedback2', function (Blueprint $table) {
            $table->id();

            $table->string('fb2_leftimg1');
            $table->string('fb2_leftimg2');
            $table->string('fb2_leftimg3');
            $table->string('fb2_leftimg4');
            $table->string('fb2_leftimg5');
            $table->string('fb2_leftimg6');

            $table->string('fb2_mainimg1');
            $table->string('fb2_para1');
            $table->string('fb2_textname1');  
            $table->string('fb2_text1');

            $table->string('fb2_mainimg2');
            $table->string('fb2_para2');
            $table->string('fb2_textname2');  
            $table->string('fb2_text2');
        
            $table->string('fb2_mainimg3');
            $table->string('fb2_para3');
            $table->string('fb2_textname3');  
            $table->string('fb2_text3');

            $table->string('fb2_staricon');

            $table->string('fb2_prebutton_icon');
            $table->string('fb2_prebutton_url');
            $table->string('fb2_prebutton_text');

            $table->string('fb2_nextbutton_icon');
            $table->string('fb2_nextbutton_url');
            $table->string('fb2_nextbutton_text');

            $table->string('fb2_rightimg1');
            $table->string('fb2_rightimg2');
            $table->string('fb2_rightimg3');
            $table->string('fb2_rightimg4');
            $table->string('fb2_rightimg5');
            $table->string('fb2_rightimg6');
       

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_feedback2');
    }
};
