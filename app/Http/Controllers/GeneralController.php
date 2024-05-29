<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Topic;
use App\Models\TopicCategory;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $posts = Post::all();
        $post_categories = PostCategory::all();
        $pages = Page::all();
        $topics = Topic::all();
        $topic_categories = TopicCategory::all();

        return view('index', compact('articles', 'posts', 'post_categories', 'pages', 'topics', 'topic_categories'));
    }


    public function page($page){
        return $page.'mi';
    }
}