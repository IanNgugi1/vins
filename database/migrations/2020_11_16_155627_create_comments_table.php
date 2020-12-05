<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comments_id')->autoIncrement();
            $table->string('comment');
            $table->timestamps();
            $table->foreignId('news_id')->references('news_id')->on('news')->onDelete('cascade');
            $table->foreignId('users_id')->references('users_id')->on('users')->onDelete('cascade');
            //$table->foreignId('editors_id')->references('editors_id')->on('editors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
