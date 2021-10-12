<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('articles', function () {
//     return Article::all();
// });

// Route::get('articles/{id}', function ($id) {
//     return Article::find($id);
// });

// Route::post('articles', function (Request $request) {
//     return Article::create($request->all());
// });

// Route::put('articles/{id}', function (Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());
//     return $article;
// });

// Route::delete('articles/{id}', function ($id) {

//     $article = Article::find($id);
//     $title = $article->title;
//     $article->delete();
//     return "Articulo ".$title.", se ha eleminado";
// });

Route::get('articles', [ArticleController::class, 'index']);

Route::get('articles/{id}', [ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'store']);

Route::put('articles/{id}', [ArticleController::class, 'update']);

Route::delete('articles/{id}', [ArticleController::class, 'destroy']);