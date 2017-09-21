<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;
use App\CategoryArticle;
use Request;

class CategoryController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
		$halaman = 'Panel Category';
		return view('panel.category.index', compact('halaman'));
    }
	public function create(){
		return 'Fungsi di matikan';
	}
	public function store(CreateCategoryRequest $request){
		$category = new CategoryArticle;
		$category->nama_kategori = $request->get('nama_kategori');
		$category->slug_kategori = Str::slug($request->get('nama_kategori'));
		$category->save();
		return redirect()->route('category.index')->with('pesan','Category telah dibuat');
	}
	public function edit($id_category){
		$CategoryArticle = CategoryArticle::find($id_category);
		$halaman = 'Ubah Kategori';
		return view('panel.category.edit', compact('CategoryArticle','halaman'));
	}
	public function update($id_category) {
		$CategoryArticle = CategoryArticle::find($id_category);
		$CategoryArticle->update(Request::all());
		return redirect()->route('category.index')->with('pesan','Category telah di ubah');
	}
	public function destroy($id_category){
		CategoryArticle::where('id_category',$id_category)->update(['flag_delete' => 1]);
		return redirect()->route('category.index')->with('pesan','Category telah diarsip');
	}
	public function daftarCategory(){
		$kategori = CategoryArticle::where('flag_delete',0)->latest('created_at')->get();
		return Datatables::of($kategori)
				->addColumn('action', function ($kategori){
					return view('ajax.category_comp', compact('kategori'));
				})->make(true);
	}
}
