<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use App\page;
use Image;


class PageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $halaman = 'Page Builder';
    	return view('panel.page.index', compact('halaman'));
    }
    public function create(){
    	$halaman = 'Page Builder : Buat Halaman';
        return view('panel.page.create', compact('halaman'));
    }
    public function store(CreatePageRequest $request){
    	$page = new page;
        $page->akun_id = Auth::id();
        $page->judul_page = $request->get('judul_page');
        $page->slug_page = Str::slug($request->get('judul_page'));
        $flag_slug = page::where('slug_page',$page->slug_page)->get();
        $page->konten_page = $request->get('konten_page');
        if ($request->hasFile('cover_page')) {
            // Prepare statement
            $gambar = $request->file('cover_page');
            $namagambar = 'page-'.time().'.'.$gambar->getClientOriginalExtension();
            $destinationPath = 'img/page';
            // Make Image
            $uploadCover = Image::make($gambar->getRealPath());
            $uploadCover->save($destinationPath.'/'.$namagambar,80);
            $page->cover_page = $namagambar;
        } else {
            $page->cover_page = 'default_cover.jpg';
        }
        if ($flag_slug->count() > 0){
            $page->judul_page = $request->get('judul_page').' ('.$flag_slug->count().')';
            $page->slug_page = Str::slug($request->get('judul_page')).' ('.$flag_slug->count().')';
            $page->save();
        } else {
            $page->save();
        }
        return redirect()->route('page.index')->with('pesan', 'Halaman telah dipublikasikan');
    }
    public function edit($id_page){
    	$page = page::find($id_page);
        $halaman = 'Edit Halaman';
        return view('panel.page.edit', compact('page', 'halaman'));
    }
    public function update(Request $request, $id_page){
        $page = new page;
        $pages = page::find($id_page);
        $page->judul_page = $request->get('judul_page');
        $page->konten_page = $request->get('konten_page');
        if ($request->hasFile('cover_page')) {
            // Prepare statement
            $gambar = $request->file('cover_page');
            $namagambar = 'page-'.time().'.'.$gambar->getClientOriginalExtension();
            $destinationPath = 'img/page';
            // Make Image
            $uploadCover = Image::make($gambar->getRealPath());
            $uploadCover->save($destinationPath.'/'.$namagambar,80);
            $page->cover_page = $namagambar;
        } else {
            $page->cover_page = $pages->cover_page;
        }
        page::where('id_page', $pages->id_page)
                        ->update([
                            'judul_page' => $page->judul_page,
                            'konten_page' => $page->konten_page,
                            'cover_page' => $page->cover_page,
         ]);
        return redirect()->route('page.index')->with('pesan','Halaman telah diupdate !');
    }
    public function destroy($id_page){
    	return 'Disabled';
    }
    public function getData(){
        $page = page::latest('created_at')->where('flag_delete',0)->get();
        return Datatables::of($page)
                ->addColumn('aksi', function($page){
                    return view('ajax.page_comp', compact('page'));
                })
                ->make(true);
    }
}
