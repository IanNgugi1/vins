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
            $table->id('editors_id')->autoIncrement();
            $table->timestamps();
            $table->string('editor_name');
            $table->string('email');
            $table->string('password');
            $table->foreignId('author_id')->references('authors_id')->on('authors')->onDelete('cascade');
            //$table->foreignId('')->references('news_id')->on('news')->onDelete('cascade');
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
