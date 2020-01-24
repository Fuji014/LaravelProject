<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article_model;
// use App\Http\Controllers\Session;

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

    public function articleIndex(){

    	return view('back.article');
    }

    public function create(){
    	return view('back.articleCreate');
    	
    }	
    public function store(){
        $article = new article_model;
        $article->title = request('title');
        $article->description = request('description');
        $article->author = request('author');
        if($article->save()) Session::flash('createFlash','Successfully Added!');

        return redirect()->route('articleCreate');


    }
}



