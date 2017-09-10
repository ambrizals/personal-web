<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\CategoryArticle;

class ViewController extends Controller
{
    public function article($slug_article){
		$article = Article::where('slug_article',$slug_article)->where('flag_delete',0)->with('CategoryArticle')->with('User')->get();
		if ($article->count() > 0) {
			$halaman = 'Blog';
			return view('article.show', compact('article','halaman'));
		} else {
			return view ('errors.article_deleted');
		}
    }
}
