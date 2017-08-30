<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Controllers\Controller;
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
		return view('category.index', compact('halaman'));
    }
	public function create(){
		return 'Fungsi di matikan';
	}
	public function store(CreateCategoryRequest $request){
		CategoryArticle::create($request->all());
		return redirect('/panel/article/category')->with('pesan','Category telah dibuat');
	}	
	public function edit($id_category){
		$CategoryArticle = CategoryArticle::find($id);
		$halaman = 'Ubah Kategori';
		return view('category.edit', compact('CategoryArticle','halaman'));
	}
	public function update($id_category) {
		$CategoryArticle = CategoryArticle::find($id);
		$CategoryArticle->update(Request::all());
		return redirect('/panel/article/category')->with('pesan','Category telah di ubah');
	}
	public function destroy($id_category){
		CategoryArticle::where('id_category',$id_category)->update(['flag_delete' => 1]);
		return redirect('/panel/article/category')->with('pesan','Category telah diarsip');
	}
	public function daftarCategory(){
		$kategori = CategoryArticle::all()->where('flag_delete',0);
		return Datatables::of($kategori)
				->addColumn('action', function ($kategori){
					return '
					<a class="btn btn-primary" href="'.url('').'/panel/article/category/'.$kategori->id_category.'/edit'.'">Atur</a>
					';
				})->make(true);	
	}
}
