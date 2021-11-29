<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_models', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('location');
            $table->string('desktopURL');
            $table->string('mobileURL');
            $table->string('siteURL');
            $table->boolean('isVisible')->default('0');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_models');
    }
}
