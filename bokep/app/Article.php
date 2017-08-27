<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['akun_id','judul_article','kategori_article','konten_article','thumbnail_article'];

    public function users(){
      return $this->belongsTo(User::class);
    }

    public function category_article(){
      return $this->belongsTo(CategoryArticle::class);
    }
}
