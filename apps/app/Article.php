<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id_article';
    protected $table = 'article';
    protected $fillable = ['akun_id','judul_article','slug_article','kategori_article','konten_article','thumbnail_article'];

    public function CategoryArticle(){
      return $this->belongsTo('App\CategoryArticle','kategori_article','id_category');
    }
    public function User(){
      return $this->belongsTo('App\User','akun_id','id');
    }
}
