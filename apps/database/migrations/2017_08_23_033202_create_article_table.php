<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id_article');
            $table->integer('akun_id')->unsigned();
            $table->string('judul_article');
            $table->string('slug_article');
            $table->integer('kategori_article')->unsigned();
            $table->text('konten_article');
            $table->string('cover_article');
            $table->string('thumbnail_article');
            $table->integer('comment_article')->default('0');
            $table->integer('flag_delete');
            $table->timestamps();

            $table->foreign('akun_id')->references('id')->on('users');
            $table->foreign('kategori_article')->references('id_category')->on('category_article');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
    }
}
