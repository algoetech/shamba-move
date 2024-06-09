<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Role;
use App\Models\Site;
use App\Models\Topic;
use App\Models\TopicCategory;
use App\Models\User;
use App\RoleFilterHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{

    use RoleFilterHelper;

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
        $sites = Site::all();
        $topic_categories = TopicCategory::all();
        // $role = Role::where('id', '=', Auth::user()->role_id)->with('permissions')->get();

        return view('index', compact('articles', 'posts', 'post_categories', 'pages', 'topics', 'topic_categories', 'sites'));
    }


    public function page($slug){
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $articles = Article::all();
        $posts = Post::all();
        $post_categories = PostCategory::all();
        $pages = Page::all();
        $topics = Topic::all();
        $sites = Site::all();
        $topic_categories = TopicCategory::all();
        return view('frontend.pages.pages', compact('articles', 'posts', 'post_categories', 'pages', 'page', 'topics', 'topic_categories', 'sites'));
    }
}