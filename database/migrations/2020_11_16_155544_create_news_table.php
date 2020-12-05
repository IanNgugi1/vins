<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id('news_id')->autoIncrement();
            $table->string('news_title');
            $table->string('news_text');
            $table->string('new_image');
            $table->string('news_topic');
            $table->string('news_subtopic');
            $table->string('approval_status');
            $table->timestamps();
            $table->foreignId('users_id')->references('users_id')->on('users')->onDelete('cascade');
            $table->foreignId('editors_id')->references('editors_id')->on('editor')->onDelete('cascade');
            $table->foreignId('author_id')->references('authors_id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
