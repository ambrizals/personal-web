<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlecommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comments', function (Blueprint $table) {
            $table->increments('id_comment');
            $table->integer('article_comment')->unsigned();
            $table->integer('akun_id')->nullable()->unsigned();
            $table->string('nama_comment');
            $table->text('content_comment');
            $table->integer('flag_delete');
            $table->timestamps();

            $table->foreign('article_comment')->references('id_article')->on('article');
            $table->foreign('akun_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_comments');
    }
}
