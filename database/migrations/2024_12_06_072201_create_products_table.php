<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('prod_name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id');
            $table->decimal('discount', 5, 2)->default(0.00);
            $table->string('img1_url')->nullable();
            $table->string('img2_url')->nullable();
            $table->string('img3_url')->nullable();
            $table->boolean('is_popular')->default(0);
            $table->enum('status', ['active', 'pause', 'delete'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
