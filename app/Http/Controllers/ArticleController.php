<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new.jpg resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|min:5',
            'body'=>'required|min:150'
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->section = $request->section;
        $article->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $section)
    {
        Article::findOrFail($section);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::firstWhere('id', $id);
        return view('pages.edit')->with(['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title'=>'required|min:5',
            'body'=>'required|min:150'
            ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }

    public function home()
    {
        $article = Article::firstWhere('section', 'hom');
        return view('pages.home')->with('article', $article);
    }
}
