<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\CategoryArticle;
use App\Article;

class ArchiveArticleController extends Controller
{
    public function index(){
        $halaman = 'Arsip Artikel';
        return view('article-archive.index', compact('halaman'));
    }
    public function articleLoad(){
      $posts = Article::select(['article.id_article','category_article.nama_kategori','article.judul_article','users.name','article.thumbnail_article','article.created_at','article.updated_at'])
  											->join('category_article', 'article.kategori_article', '=', 'category_article.id_category')
  											->join('users','article.akun_id','=','users.id')
  											->where('article.flag_delete',1)
  											->get();
  		return Datatables::of($posts)
  						->editColumn('judul_article', '{!! str_limit($judul_article, 60) !!}')
  						->addColumn('aksi', function($posts){
  							return view('ajax.article_comp', compact('posts'));
  						})
  						->make(true);
    }
    public function categoryLoad(){
  		$kategori = CategoryArticle::all()->where('flag_delete',1);
  		return Datatables::of($kategori)->make(true);
    }
}
