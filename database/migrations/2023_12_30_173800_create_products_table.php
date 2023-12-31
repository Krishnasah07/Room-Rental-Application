<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('address');
            $table->string('price');
            $table->tinyInteger('rooms');
            $table->tinyInteger('halls');
            $table->tinyInteger('kitchen');
            $table->tinyInteger('bathroom');
            $table->string('phone');
            $table->tinyInteger('status');
            $table->tinyInteger('image1');
            $table->tinyInteger('image2');
            $table->tinyInteger('image3');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
