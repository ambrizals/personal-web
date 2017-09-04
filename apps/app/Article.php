<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id_article';
    protected $table = 'article';
    protected $fillable = ['akun_id','judul_article','kategori_article','konten_article','thumbnail_article'];
}
