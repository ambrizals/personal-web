<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use App\page;

class PageController extends Controller
{
    public function index(){
    	return 'Wkwkw land';
    }
    public function create(){
    	return 'Wkwkw land';
    }
    public function store(CreatePageRequest $request){
    	return 'Wkwkw land';
    }
    public function edit($id_page){
    	return 'Wkwkw land';
    }
    public function update(Request $request){
    	return 'Wkwkw land';
    }
    public function destroy($id_page){
    	return 'Wkwkw land';
    }
}
