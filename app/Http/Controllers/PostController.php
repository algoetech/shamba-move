<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts  = Post::all();
        $title = "Posts";
        $categories = PostCategory::all();
        return view('backend.posts.index', compact('posts', 'title', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        // return $request;
        try {
            $post = new Post();

            $post->title = $request->name;
            $post->user_id = $request->user()->id;
            $post->post_category_id = $request->category;
            $post->content = $request->description;
            $post->is_published = $request->ispublic?1:0;

            if ($request->hasFile('image')) {
                $originalFilename = $request->file('image')->getClientOriginalName();
                $timestamp = now()->timestamp;

                $uniqueFilename = $timestamp . '-' . Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)) . '.' . $request->file('image')->getClientOriginalExtension();
                $postimagePath = $request->file('image')->storeAs('images/post/', $uniqueFilename, 'public');
                $post->image = "storage/".$postimagePath;
            } else {
                $postimagePath = null;
            }

            $post->save();

            // return $post;
            return redirect()->route('admin.posts.index')->with('status', 'post was created successfully.');

        } catch (\Exception $e) {
            Log::error('Error creating post category: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id', '=', $id)->firstOrFail();
        $title = $post->title;
        return view('backend.posts.edit', compact('post', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'string|required|min:9',
            'content' => 'string'
        ]);

        try {
            $post = Post::where('id', '=', $id)->firstOrFail();

            $post->title = $request->title;
            $post->content = $request->content;

            $post->update();

            return redirect()->back()->with('status', "Post Updated Successfully");
        } catch (\Exception $th) {
            return redirect()->back()->with('error', "Post Failed to be Updated: {$th->getMessage()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        try {
            $post = Post::findOrFail($post);
            $post->delete();

            return redirect()->back()->with('status', 'Post was deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Post Category: ' . $e->getMessage());

            return redirect()->back()->with('error', "There was an error deleting this Post . {$e->getMessage()}.");
        }
    }
}