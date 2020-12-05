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
            $table->id('authors_id')->autoIncrement();
            $table->timestamps();
            $table->string('author_name');
            $table->string('email');
            $table->string( 'password');
            $table->string( 'location');
            //$table->foreignId('news_id')->references('news_id')->on('news')->onDelete('cascade');
            //$table->foreignId('editors_id')->references('editors_id')->on('editor')->onDelete('cascade');
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
