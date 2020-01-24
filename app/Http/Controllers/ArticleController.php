<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article_model;
use DataTables;
use App\User;

use Session;  

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

    // article create
    public function create(){ return view('back.articleCreate'); }

    // article store
    public function store(){ $article = new article_model;$article->title = request('title');$article->description = request('description');$article->author = request('author');if($article->save()) Session::flash('createFlash','Successfully Added!');return redirect()->route('article');
    }
    
    // table test
    public function tableTest(){
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }

}



