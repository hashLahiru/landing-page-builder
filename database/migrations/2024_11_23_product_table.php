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
        Schema::create('new_product', function (Blueprint $table) {
            $table->id();
            $table->string('f1_title');
            $table->text('f1_description')->nullable();
  
            $table->string('f1_icon1');
            $table->string('f1_text1');
            $table->string('f1_description1');
            $table->string('f1_button1_text');
            $table->string('f1_button1_url');


            $table->string('f1_icon2');
            $table->string('f1_text2');
            $table->string('f1_description2');
            $table->string('f1_button2_text');
            $table->string('f1_button2_url');

            $table->string('f1_icon3');
            $table->string('f1_text3');
            $table->string('f1_description3');
            $table->string('f1_button3_text');
            $table->string('f1_button3_url');

            $table->string('f1_icon4');
            $table->string('f1_text4');
            $table->string('f1_description4');
            $table->string('f1_button4_text');
            $table->string('f1_button4_url');


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_product');
    }
};
