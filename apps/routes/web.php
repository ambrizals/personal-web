<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('static.index', ['halaman' => 'Beranda']);
});
Route::get('/about', function () {
	return view('static.about', ['halaman' => 'About']);
})->name('about');
Route::prefix('akun')->group(function () {
	Route::get('/', 'AkunController@infoku')->name('Lihat Profil');
	Route::get('/edit', 'AkunController@edit')->name('Ubah Profil');
	Route::get('/ubahpassword','AkunController@ubahPassword')->name('Ubah Password');
	Route::put('/update', 'AkunController@update')->name('Update Profil');
	Route::put('/updatepassword', 'AkunController@updatePassword')->name('Update Password');
});
Route::group(['prefix'=>'panel'], function() {
	Route::group(['prefix' => 'article'], function() {
		Route::get('/', function() {
			return redirect()->route('posts.index');
		});
		Route::resource('posts','ArticleController');
  		Route::resource('category','CategoryController');
		Route::get('categoryLoad','CategoryController@daftarCategory')->name('Ajax Load Category');
		Route::get('articleLoad','ArticleController@daftarArticle')->name('Ajax Load Article');
		Route::group(['prefix' => 'archiveAjax'], function() {
			Route::get('articleLoad','ArchiveArticleController@articleLoad')->name('Ajax Article Archive');
			Route::get('categoryLoad','ArchiveArticleController@categoryLoad')->name('Ajax Category Archive');
		});
		Route::get('archive','ArchiveArticleController@index')->name('Archive Pages');
	});
	Route::group(['prefix' => 'project'], function() {
		Route::resource('/item','ProjectController');
	});
});
Auth::routes();
Route::group(['prefix' => 'blog'], function() {
	Route::get('read/{slug}','ViewController@article')->name('articles.show');
	Route::get('/','ViewController@articleIndex')->name('articles.index');
	Route::get('category/{slug}','ViewController@categoryArticleIndex')->name('articles.category');
});
Route::post('/upload_image', 'ImagesUploadController@CKEditor');
