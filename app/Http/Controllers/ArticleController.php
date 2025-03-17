<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        return ArticleResource::collection(Article::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): bool
    {
        $article = new Article();

        $article->title = $request->title;
        $article->slug = $request->slug;
        $article->content = $request->content;
        $article->author = $request->author;
        $article->image = $request->image;

        return $article->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): ArticleResource
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
    }
}
