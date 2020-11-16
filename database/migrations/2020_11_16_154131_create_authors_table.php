<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id('authors_id')->primary()->increments();
            $table->timestamps();
            $table->string(`author_name`);
            $table->string(`email`);
            $table->string( `password` );
            $table->string( `location`);
            $table->foreignId(`news_id`);
            $table->foreignId(`editor_id`);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author');
    }
}
