<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use APp\project_images;

class ProjectController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    public function index(){
    	return 'Panel Project';
    }
}
