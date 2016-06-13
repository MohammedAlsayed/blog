<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Auth;

class articleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>'index']);
    }

    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        return view("articles.index", compact('articles'));

    }

    public function show($article){

        return view("articles.show", compact("article"));
    }
    public function create(){
        return view("articles.create");
    }

    public function store(Requests\ArticleRequest $request){
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);

        \Session::flash('flash_message', 'article has been created!');

        return redirect('articles');
    }
    public function edit($article){
        return view('articles.edit', compact('article'));
    }

    public function update($article, Requests\ArticleRequest $request){


        $article-> update($request->all());
        
       return redirect('articles');

    }

}
