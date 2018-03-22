<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
	public function __construct(){
		// $this->middleware('auth');
	}
    public function home(){
    	return view('welcome');
    }

    public function about(){
    	return view('about');
    }

     public function contact(){
    	return view('contact');
    }
}
