<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
    	return view('welcome');
    }
    public function menu(){
    	return view('menu');
    }
    public function contact(){
    	return view('contact');
    }
    public function reservation(){
    	return view('reservation');
    }
    public function menudetail(){
        return view('menu-detail');
    }
}
