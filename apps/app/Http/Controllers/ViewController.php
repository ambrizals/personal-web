<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\CategoryArticle;

class ViewController extends Controller
{
    public function article($slug_article){
			$article = Article::where('slug_article',$slug_article)->where('flag_delete',0)->with('CategoryArticle')->with('User')->first();
			if ($article == null) {
				return view ('errors.article_deleted');
			} else {
				$halaman = 'Blog : '.$article->judul_article;
				return view('article.show', compact('article','halaman'));
			}
    }
    public function articleIndex(){
			$article = Article::where('flag_delete',0)->latest('created_at')->with('CategoryArticle')->with('User')->paginate(10);
			$halaman = 'Blog';
			return view('article.index_blog', compact('article','halaman'));
    }
}
