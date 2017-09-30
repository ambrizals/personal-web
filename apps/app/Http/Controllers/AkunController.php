<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
Use Image;


class AkunController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function infoku(){
      $fotourl =  Auth::user()->fotoprofil;
      $fotoprofil = 'img/profil/'. $fotourl;
		  $halaman = 'Profil Saya';
    	return view('akun.index', compact('halaman','fotoprofil'));
    }
    public function edit(){
      $fotourl =  Auth::user()->fotoprofil;
      $fotoprofil = 'img/profil/'. $fotourl;
      $halaman = 'Ubah Profil';
    	$akunid = Auth::user()->id;
    	$akun = User::find($akunid);
    	return view('akun.edit',compact('akun','halaman','fotoprofil'));
    	echo $akun;
    }
    public function update(Request $request) {
      $this->validate($request, [
        'fotoprofil' => 'image|mimes:jpeg,png,jpg'
      ]);
      $akunid = Auth::user()->id;
      if ($request->hasFile('fotoprofil')) {
        $fotoprofil = $request->file('fotoprofil');
        $namafoto = 'profil-'.$akunid.'.'.'jpg';

        $destinationPath = ('img/profil');
        $ubah_foto = Image::make($fotoprofil->getRealPath())->resize(150,150)->encode('jpg');
        unlink($destinationPath.'/'.Auth::user()->fotoprofil);
        $ubah_foto->save($destinationPath.'/'.$namafoto,80);
      }else {
        $namafoto = Auth::user()->fotoprofil;
      }
  		Auth::user()->update([
  			'name' => $request->name,
        'email' => $request->email,
        'biodata' => $request->biodata,
        'fotoprofil' => $namafoto
      ]);
  		return redirect('akun')->with('pesan','Profil berhasil dirubah');
    }
    public function ubahPassword(){
      $halaman = 'Ubah Password';
      return view('akun.ubahpassword',compact('halaman'));
    }
    public function updatePassword(ChangePasswordRequest $requestPassword){
      $user = User::find(Auth::id());
    	$passwordlama = $user->password;
      if (Hash::check($requestPassword->old_password, $passwordlama)) {
        Auth::user()->update([
          'password' => bcrypt($requestPassword->password_konfirmasi)
        ]);
        return redirect('akun')->with('pesan','Password berhasil dirubah');
      } else {
        return redirect('akun/ubahpassword')->with('pw_error','Password lama tidak sama dengan password saat ini.');
      }
    }
}
