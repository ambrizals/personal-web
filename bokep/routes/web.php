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
			return redirect('panel/article/posts');
		});
		Route::resource('posts','ArticleController');
  		Route::resource('category','CategoryController');
  		Route::get('categoryLoad','CategoryController@daftarCategory')->name('Ajax Load Category');
	});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
