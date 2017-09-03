<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequests;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\Article;
use App\CategoryArticle;
Use Image;

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
		$category = CategoryArticle::pluck('nama_kategori','id_category')->where('flag_delete', 0);
		$halaman = 'Buat Artikel';
		return view('article.create', compact('halaman','category') );
	}
	public function store(CreateArticleRequests $request){
		//Cuman nyoba ini
		$article = new Article;
		$article->akun_id = Auth::id();
		$article->judul_article = $request->get('judul_article');
		$article->kategori_article = $request->get('kategori_article');
		$article->konten_article = $request->get('konten_article');

		//fungsi namafoto
		if ($request->hasFile('thumbnail_article')) {
			$gambar = $request->file('thumbnail_article');
			$namafoto = 'article-'.time().'.'.$gambar->getClientOriginalExtension();
			//Cover gambar
			$destinationPath = ('img/article');
			$uploadCover = Image::make($gambar->getRealPath());
			$uploadCover->save($destinationPath.'/'.$namafoto,80);
			//Thumbnail di daftar artikel
			$destinationThumbnail = ('img/thumbnail');
			$uploadThumbnail = Image::make($gambar->getRealPath())->resize(300,300);
			$uploadThumbnail->save($destinationThumbnail.'/'.$namafoto,80);
		}
		//stop disini
		$article->thumbnail_article = $namafoto;
		$article->save();

		return redirect('/panel/article/posts')->with('pesan','Artikel telah dipublikasikan');
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
