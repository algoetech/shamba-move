<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::select(['*'])
        ->with('post:title,id')
        ->get();

        $title = "Questions";
        $categories = Question::all();

        return view('backend.questions.index', compact('questions','title','categories'));
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
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            $questions = Question::findOrFail($id);
            $questions->delete();

            return redirect()->back()->with('status', 'Question deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting Post Category: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error deleting this Post Category. Please try again.');
        }
    }
    }
