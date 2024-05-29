<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Load Articles
        $articles = Article::latest()->paginate(9);

        // Cut Body Lengh
        foreach($articles as $art){
            $art->body = substr($art->body, 0, 150);
        }

        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $attributes = $request->validate([
            'title'     =>  ['required', 'max:40'],
            'body'      =>  ['required']
        ]);

        // Save
        $article = Article::create($attributes);

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // Validate
        $attributes = $request->validate([
            'title'     =>  ['required', 'max:40'],
            'body'      =>  ['required']
        ]);

        // Update Object with new values
        $article->title = request()->title;
        $article->body = request()->body;

        // Save
        $article->save();

        return redirect('/article/' . $article->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/articles');
    }

    public function destroyConfirmation(Article $article){

        return view('articles.single')->with(['delete' => true, 'article' => $article]);
    }


    public function single(Article $article){

        
        return view('articles.single')->with('article', $article);
    }


}
