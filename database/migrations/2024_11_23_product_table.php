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
            $table->string('product_title');
            $table->text('product_description')->nullable();
            $table->string('detail_button_text');
            $table->string('detail_button_url');

            $table->string('icon_1');
            $table->string('text_1');
            $table->string('description_1');
            $table->string('button_1_text');
            $table->string('button_1_url');


            $table->string('icon_2');
            $table->string('text_2');
            $table->string('description_2');
            $table->string('button_2_text');
            $table->string('button_2_url');

            $table->string('icon_3');
            $table->string('text_3');
            $table->string('description_3');
            $table->string('button_3_text');
            $table->string('button_3_url');

            $table->string('icon_4');
            $table->string('text_4');
            $table->string('description_4');
            $table->string('button_4_text');
            $table->string('button_4_url');


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
