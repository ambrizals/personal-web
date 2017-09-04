<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function infoku(){
    	return view('profil.index');
    }
}
