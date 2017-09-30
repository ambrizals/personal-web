<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\CategoryArticle;
use App\page;
use App\article_comment;

class ViewController extends Controller
{
    public function article($slug_article){
		$article = Article::where('slug_article',$slug_article)->where('flag_delete',0)->with('CategoryArticle')->with('User')->first();
		$comment = article_comment::where('article_comment',$article->id_article)->paginate(10,['*'],'comment');
		if ($article == null) {
			return view ('errors.404');
		} else {
			$halaman = 'Blog : '.$article->judul_article;
			return view('article.show', compact('article','halaman','comment'));
		}
    }
    public function articleIndex(){
		$article = Article::where('flag_delete',0)->latest('created_at')->paginate(10);
		$halaman = 'Blog';
		return view('article.index_blog', compact('article','halaman'));
	}
	public function categoryArticleIndex($slug_kategori){
		$category = CategoryArticle::where('slug_kategori',$slug_kategori)->where('flag_delete',0)->first();
		if ($category == null) {
			return view ('errors.404');
		} else {
			$flag_kategori = $category->id_category;
			$article = Article::where('flag_delete',0)->latest('created_at')->where('kategori_article',$flag_kategori)->paginate(10);
			return view('category.index', compact('article','category'));
		}
	}
	public function showPage($slug_page) {
		$page = page::where('slug_page',$slug_page)->where('flag_delete',0)->first();
		if ($page == null) {
			return view ('errors.404');
		} else {
			$halaman = $page->judul_page;
			return view('page', compact('page','halaman'));
		}
	}

}
