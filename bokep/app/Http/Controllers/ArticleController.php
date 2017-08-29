<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Article;

class ArticleController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		$halaman = 'Panel Artikel';
		return view('article.index', compact('halaman'));
	}
	public function create(){
		return 'Wkwkwk land';
	}
	public function store(){

	}
	public function edit($id){
		return 'Wkwkwk Land';
	}
	public function update($id) {

	}
	public function destory($id){

	}
	public function daftarArticle(){
		$posts = Article::select(['article.id_article','category_article.nama_kategori','article.judul_article','users.name','article.thumbnail_article','article.created_at','article.updated_at'])
											->join('category_article', 'article.kategori_article', '=', 'category_article.id_category')
											->join('users','article.akun_id','=','users.id')->get();
		return Datatables::of($posts)
						->editColumn('judul_article', '{!! str_limit($judul_article, 60) !!}')
						->make(true);
	}
}
