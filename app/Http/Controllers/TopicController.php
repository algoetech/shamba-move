<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\TopicCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics  = Topic::all();
        $title = "Topics";
        $categories = TopicCategory::all();
        return view('backend.topics.index', compact('topics', 'title', 'categories'));
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
        //

        $topic = new Topic();
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->user_id = $request->user()->id;

        $topic->save();

        return redirect()->route('admin.topics.index')->with('status', 'Topic was created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $topic = Topic::where('id', '=', $id)->firstOrFail();
        $title = $topic->name;
        return view('backend.topics.edit', compact('topic', 'title'));
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
            $topic = Topic::findOrFail($id);

            $topic->name = $request->name;
            $topic->description = $request->description;

            $topic->update();

            return redirect()->route('admin.topics.index')->with('status', 'Topic updated successfully.');
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
            $topic = Topic::findOrFail($id);
            $topic->delete();

            return redirect()->back()->with('status', 'Topic deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Post Category: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error deleting this Post Category. Please try again.');
        }
    }
}
