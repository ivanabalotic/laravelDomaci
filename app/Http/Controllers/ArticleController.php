<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    //
    public function index() {
        return Article::all();
    }

    public function show(Article $article) {
        return $article;
    }

    public function store(Request $req) {
        $article = Article::create($req->all());

        return response()->json($article, 201);
    }

    public function update(Request $req, Article $article) {
        $article->update($req->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
