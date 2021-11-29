<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('post');
            $table->string('postExcerpt','3000');
            $table->string('slug');
            $table->integer('created_by');
            $table->string('featuredImage');
            $table->string('metaDescription');
            $table->boolean('isVideoFeatured')->default('0');
            $table->integer('views');
            $table->text('jsonData');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->on('categories')->references('id');
            $table->boolean('isPublished')->default('0');
            $table->integer('editedBy');
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
        Schema::dropIfExists('posts');
    }
}
