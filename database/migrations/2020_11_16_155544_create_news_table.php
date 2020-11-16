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
            $table->id('news_id')->primary()->increments();
            $table->string(`news_title`);
            $table->string(`news_text`);
            $table->string(`new_image`);
            $table->string(`news_topic`);
            $table->string(`news_subtopic`);
            $table->string(`approval_status`);
            $table->timestamps('published_time');
            $table->foreignId(`user_id`);
            $table->foreignId(`editor_id` );
            $table->foreignId(`author_id`);
            $table->foreignId(`comments_id`);
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
