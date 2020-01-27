<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article_model;
use DataTables;

use Session;  

class ArticleController extends Controller{ // article controller

    public function article(){ // article dashboard
    	return view('back.article');
    }

    public function create(){ // article create
        return view('back.articleCreate'); 
    }

    public function store(){ // article store
        $article = new article_model; $article->title = request('title'); $article->description = request('description'); $article->author = request('author'); if($article->save()) Session::flash('createFlash','Successfully Added!'); return redirect()->route('article');
    }
    
    public function edit(article_model $id){ // article edit
        $article = $id;
        return view('back.articleEdit',compact('article'));
    }

    public function update(article_model $id){ // article update
        $article = $id;$article->title = request('title'); $article->description = request('description'); $article->author = request('author'); if($article->save()) Session::flash('createFlash','Successfully Added!'); return redirect()->route('article');
    }

    public function destroy(article_model $id){ // article delete
        $article = $id; $article->delete();
    }

    public function articleTable(){ // article table
        $users = article_model::select(['id', 'title', 'description', 'author', 'created_at', 'updated_at']);
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="'.route('articleEdit',$user->id).'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a href="#articleDelete" class="btn btn-xs btn-danger articleDelete" id="'.$user->id.'"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            // ->removeColumn('password')
            ->make(true);
    }

}



