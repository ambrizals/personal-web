<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    protected $table = 'category_article';
    protected $fillable = ['nama_kategori'];

    public function article(){
      return $this->hasMany(Article::class);
    }
}
