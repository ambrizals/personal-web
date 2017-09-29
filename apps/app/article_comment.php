<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article_comment extends Model
{
    protected $primaryKey = 'id_comment';
    protected $table = 'article_comments';
    protected $fillable = ['article_comment','nama_comment','content_comment'];

    public function article() {
    	return $this->hasMany('App\Article');
    }
}
