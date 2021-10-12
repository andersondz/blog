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

    public function show(Article $id)
    {
        return $id;
        // return Article::find($id);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, Article $id)
    {
        // $article = Article::findOrFail($id);
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function destroy(Article $id)
    {
        // $article = Article::finOrFail($id);
        // $article->delete();
        $id->delete();
        return response()->json(null, 204);
    }
}
