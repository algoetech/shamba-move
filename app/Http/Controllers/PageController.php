<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageStoreRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        $title = "Pages";
        return view('backend.pages.index', compact('pages', 'title'));
    }


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


    public function edit(string $id)
    {

        $page = Page::where('id', '=', $id)->firstOrFail();
        $title = $page->title;
        return view('backend.pages.edit', compact('page', 'title'));
    }


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


    public function destroy(string $id)
    {
        try {
            $page = Page::findOrFail($id);
            if ($page->banner) {
                Storage::disk('public')->delete($page->banner);
            }

            $page->delete();

            return redirect()->route('admin.pages.index')->with('status', 'Page deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting page: ' . $e->getMessage());

            return redirect()->route('admin.pages.index')->with('error', 'There was an error deleting the page. Please try again.');
        }
    }
}