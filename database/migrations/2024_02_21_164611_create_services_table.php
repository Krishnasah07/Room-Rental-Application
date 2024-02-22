<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('system_settings_id');
            $table->longText('contact_us')->nullable() ;
            $table->longText('read_undestand')->nullable() ;
            $table->longText('customer_support')->nullable() ;
            $table->longText('clarity')->nullable() ;
            $table->longText('connectivity')->nullable();
            $table->longText('time')->nullable();
            $table->timestamps();

            $table->foreign('system_settings_id')->references('id')->on('systemsettings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
