<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\CategoryArticle;

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
		return redirect('category.index')->with('pesan','Category telah dibuat');
	}
	public function edit($id){
		$CategoryArticle = CategoryArticle::find($id);
		return view('category.edit', compact('CategoryArticle'));
	}
	public function update($id) {
		$CategoryArticle = CategoryArticle::find($id);
		$CategoryArticle->update(Request::all());
		return redirect('category.index')->with('pesan','Category telah di ubah');
	}
	public function destory($id){
		CategoryArticle::where('id',$id)->update(['flag_delete' => 1]);
		return redirect('category.index')->with('pesan','Category telah diarsip');
	}
}
