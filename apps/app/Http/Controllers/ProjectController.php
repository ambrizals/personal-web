<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\project;
use App\project_images;

class ProjectController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    public function index(){
    	return 'Panel Project';
    }
    public function store(Request $request){

    }
    public function edit($id_project){

    }
    public function update(Request $request){

    }
    public function destroy($id_project){

    }
}
