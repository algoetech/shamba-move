<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Role;
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
        $topic_categories = TopicCategory::all();
        // $role = Role::where('id', '=', Auth::user()->role_id)->with('permissions')->get();

        return view('index', compact('articles', 'posts', 'post_categories', 'pages', 'topics', 'topic_categories'));
    }


    public function page($page){
        $this->hasAccess('Post', 'read');
        $user = User::where('id', '=', Auth::user()->id)->with(['role'])->get();
        // dd($user->role->name);

        return Auth::user();
    }
}
