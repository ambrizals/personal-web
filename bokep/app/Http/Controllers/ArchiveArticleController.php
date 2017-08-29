<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\CategoryArticle;

class ArchiveArticleController extends Controller
{
    public function index(){
        $halaman = 'Arsip Artikel';
        return view('article-archive.index', compact('halaman'));
    }
    public function articleLoad(){

    }
    public function categoryLoad(){
		$kategori = CategoryArticle::all()->where('flag_delete',1);
		return Datatables::of($kategori)->make(true);	
    }
}
