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
            $table->string('location');
            $table->text('hall')->nullable();
            $table->text('room')->nullable();
            $table->text('kitchen')->nullable();
            $table->text('bathroom')->nullable();
            $table->string('image');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();            
            $table->string('price');
            $table->tinyInteger('status');
            $table->integer('phone')->nullable();
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
