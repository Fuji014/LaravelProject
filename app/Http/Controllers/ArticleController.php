<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // welcome
    public function welcome(){
    	return view('front.blog');
    }
}
