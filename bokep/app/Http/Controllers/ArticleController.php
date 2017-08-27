<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
