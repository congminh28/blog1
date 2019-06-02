<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagsPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagsPost', function (Blueprint $table) {
           $table->unsignedBigInteger('post_id');
           $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
           $table->unsignedBigInteger('tag_id');
           $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
    {
        Schema::dropIfExists('tagsPost');
    }
    }
}
