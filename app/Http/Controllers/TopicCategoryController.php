<?php

namespace App\Http\Controllers;

use App\Models\TopicCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TopicCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topicsCategories = TopicCategory::all();
        $title = "TopicsCategories";
        $categories = TopicCategory::all();
        return view('backend.topic-categories.index', compact('topicsCategories', 'title', 'categories'));
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

        $topicsCategories = new TopicCategory();
        $topicsCategories->name = $request->name;
        $topicsCategories->description = $request->description;
        // $topicsCategories->user_id = $request->user()->id;

        $topicsCategories->save();

        return redirect()->route('admin.topic-categories.index')->with('status', 'TopicCategories was created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $topicsCategories = TopicCategory::where('id', '=', $id)->firstOrFail();
        $title = $topicsCategories->name;
        return view('backend.topic-categories.edit', compact('topicsCategories', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        try {
            $topicsCategories = TopicCategory::findOrFail($id);

            $topicsCategories->name = $request->name;
            $topicsCategories->description = $request->description;

            $topicsCategories->update();

            return redirect()->route('admin.topic-categories.index')->with('status', 'TopicCategories updated successfully.');
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
        //

        try {
            $topicsCategories = TopicCategory::findOrFail($id);
            $topicsCategories->delete();

            return redirect()->back()->with('status', 'TopicCategories deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Post Category: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error deleting this Post Category. Please try again.');
        }
    }
}
