<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequests;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
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
		$category = CategoryArticle::where('flag_delete',0)->pluck('nama_kategori','id_category');
		$halaman = 'Buat Artikel';
		return view('article.create', compact('halaman','category') );
	}
	public function store(CreateArticleRequests $request){
		//Cuman nyoba ini
		$article = new Article;
		$article->akun_id = Auth::id();
		$article->judul_article = $request->get('judul_article');
		$article->slug_article = Str::slug($request->get('judul_article'));
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
		} else {
			$namafoto = 'default_cover.jpg';			//File foto belum tersedia
		}
		//stop disini
		$article->thumbnail_article = $namafoto;
		$article->save();

		return redirect()->route('posts.index')->with('pesan','Artikel telah dipublikasikan');
	}
	public function edit($id_article){
		$posts = Article::find($id_article);
		$category = CategoryArticle::where('flag_delete',0)->pluck('nama_kategori','id_category');
		$halaman = 'Ubah Artikel';
		return view('article.edit', compact('posts','category','halaman'));
	}
	public function update(Request $request, $id_article) {
		$posts = new Article;
		$article = Article::find($id_article);	// Variable untuk ambil data sebelumnya
		$posts->judul_article = $request->get('judul_article');
		$posts->kategori_article = $request->get('kategori_article');
		$posts->konten_article = $request->get('konten_article');
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
		} else {
			$namafoto = $article->thumbnail_article;			//File foto belum tersedia
		}
		$posts->thumbnail_article = $namafoto;
		Article::where('id_article', $article->id_article)
						->update([
							'judul_article' => $posts->judul_article,
							'kategori_article' => $posts->kategori_article,
							'konten_article' => $posts->konten_article,
							'thumbnail_article' => $posts->thumbnail_article,
		]);
		return redirect()->route('posts.index')->with('pesan','Artikel telah diupdate !');
	}
	public function destroy($id_article){
		Article::where('id_article',$id_article)->update(['flag_delete' => 1]);
		return redirect()->route('posts.index')->with('pesan','Category telah diarsip');
	}
	public function daftarArticle(){
		$posts = Article::select(['article.id_article','category_article.nama_kategori','article.judul_article','article.slug_article','users.name','article.thumbnail_article','article.created_at','article.updated_at'])
											->join('category_article', 'article.kategori_article', '=', 'category_article.id_category')
											->join('users','article.akun_id','=','users.id')
											->where('article.flag_delete',0)
											->get();
		return Datatables::of($posts)
						->editColumn('judul_article', '{!! str_limit($judul_article, 60) !!}')
						->addColumn('aksi', function($posts){
							return view('ajax.article_comp', compact('posts'));
						})
						->make(true);
	}
}
