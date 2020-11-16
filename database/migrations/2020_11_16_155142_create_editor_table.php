<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editor', function (Blueprint $table) {
            $table->id('editor_id')->primary()->increments();
            $table->timestamps();
            $table->string(`editor_name`);
            $table->string(`email`);
            $table->string(`password`);
            $table->foreignId(`author_id`);
            $table->foreignId(`news_id`);
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
        Schema::dropIfExists('editor');
    }
}
