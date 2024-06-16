<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->hasAccess('Article_read');
        $articles = Article::all();
        $posts = Post::all();
        $title = "Articles";
        return view('backend.articles.index', compact('articles', 'title', 'posts'));
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $article = new Article();

            $article->name = $request->name;
            $article->content = $request->context;
            $article->post_id = $request->post;
            $article->user_id = $request->user()->id;

            $article->save();

            return redirect()->route('admin.articles.index')->with('status', 'An Article was created successfully.');
        } catch (\Exception $th) {
            return redirect()->route('admin.articles.index')->with('error', "An Article was not created : {$th->getMessage()}");
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $article)
    {
        $this->hasAccess('Article_update');
        $article = Article::where('id', '=', $article)->firstOrFail();
        $posts = Post::all();
        $title = "Edit {$article->name}";
        return view('backend.articles.edit', compact('article', 'title', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        try {
            $article = Article::where('id', '=', $article)->firstOrFail();

            $article->name = $request->name;
            $article->content = $request->context;
            $article->post_id = $request->post;
            $article->user_id = $request->user()->id;

            $article->update();

            return redirect()->route('admin.articles.index')->with('status', 'An Article was created successfully.');
        } catch (\Exception $th) {
            return redirect()->route('admin.articles.index')->with('error', "An Article was not created : {$th->getMessage()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $article)
    {
        try {
            $post = Article::findOrFail($article);
            $post->delete();

            return redirect()->back()->with('status', 'An Article was deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Article: ' . $e->getMessage());

            return redirect()->back()->with('error', "{$e->getMessage()} . Please try again.");
        }
    }
}