<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postCategories = PostCategory::all();
        $title = "Post-Categories";
        return view('backend.post-categories.index', compact('postCategories', 'title'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request for postCategory;
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        try {
            // Create a new post category
            $postCategory = new PostCategory();
            $postCategory->name = $request->name;
            $postCategory->description = $request->description;
            $postCategory->save();

            // Redirect to a specific route with a success message
            return redirect()->route('admin.post-categories.index')->with('status', 'Post category created successfully.');
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error creating post category: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'There was an error creating the post category. Please try again.')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PostCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postCategory = PostCategory::where('id', '=', $id)->firstOrFail();
        $title = "Edit : $postCategory->name";
        return view('backend.post-categories.edit', compact('postCategory', 'title'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        try {
            $postCategory = PostCategory::findOrFail($id);
            
            $postCategory->name = $request->name;
            $postCategory->description = $request->description;

            $postCategory->update();
            
            return redirect()->route('admin.post-categories.index')->with('status', 'Post Category updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating user: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error updating the Post Category. Please try again.')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $postCategory = PostCategory::findOrFail($id);
            $postCategory->delete();

            return redirect()->back()->with('status', 'Post Category deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Post Category: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error deleting this Post Category. Please try again.');
        }
    }
}