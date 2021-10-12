<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show(Article $article)
    {
        return $article;
        // return Article::find($article);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        // $article = Article::findOrFail($article);
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function destroy(Article $article)
    {
        // $article = Article::finOrFail($article);
        // $article->delete();
        $article->delete();
        return response()->json(null, 204);
    }
}
