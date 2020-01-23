<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // welcome
    public function welcome(){
    	$title = "welcome";
    	return view('front.blog',compact('title'));
    }
    // dashboard
    public function dashboard(){
    	return view('back.index');
    }
}

