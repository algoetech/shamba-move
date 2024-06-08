<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageStoreRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        $title = "Pages";
        return view('backend.pages.index', compact('pages', 'title'));
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
    public function store(PageStoreRequest $request)
    {

        try {
            $page = new Page();

            $page->title = $request->title;
            $page->content = $request->content;
            $page->resource = $request->resource?1:0;

            if ($request->hasFile('banner')) {
                $originalFilename = $request->file('banner')->getClientOriginalName();
                $timestamp = now()->timestamp;
                
                $uniqueFilename = $timestamp . '-' . Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)) . '.' . $request->file('banner')->getClientOriginalExtension();
                $pageBannerPath = $request->file('banner')->storeAs('images/page/', $uniqueFilename, 'public');
                $page->banner = "storage/".$pageBannerPath;
            } else {
                $pageBannerPath = null;
            }
            
            $page->save();
            
            // return $page;
            return redirect()->route('admin.pages.index')->with('status', 'Page was created successfully.');
            
        } catch (\Exception $e) {
            Log::error('Error creating post category: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $page = Page::where('id', '=', $id)->firstOrFail();
        $title = $page->title;
        return view('backend.pages.edit', compact('page', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PageStoreRequest $request,  string $id)
    {
        try {
            $page = Page::findOrFail($id);
            
            $page->title = $request->title;
            $page->content = $request->content;

            $page->update();
            
            return redirect()->route('admin.pages.index')->with('status', 'Page updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating page: ' . $e->getMessage());
            return redirect()->back()->with('error', 'There was an error updating the Page. Please try again.'.$e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}