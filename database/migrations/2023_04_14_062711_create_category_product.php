<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();


            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('product_category')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_product');
    }
};
