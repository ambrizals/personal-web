<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    protected $primaryKey = 'id_category';
    protected $table = 'category_article';
    protected $fillable = ['nama_kategori'];

    public function Article(){
        return $this->belongsToMany('Article', 'kategori_article','id_category','id_article');
    }
}
