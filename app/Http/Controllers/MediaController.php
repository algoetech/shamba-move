<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class MediaController extends Controller
{

    public function index()
    {
        $medias = Media::all();
        $title = "Media";
        return view('backend.medias.index', compact('medias', 'title')) ;
    }


    public function store(Request $request)
    {
        $this->hasAccess('Media_create');
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:image,video,pdf',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,pdf|max:20480', // 20MB max
        ]);



        try {
                // Handle file upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $originalFilename = $file->getClientOriginalName();
                $timestamp = now()->timestamp;

                $uniqueFilename = $timestamp . '-' . Str::slug(pathinfo($originalFilename, PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('uploads', $uniqueFilename, 'public');

                // Save the media information in the database
                $media = new Media();
                $media->name = $validatedData['name'];
                $media->type = $validatedData['type'];
                $media->file = "storage/" . $filePath;
                $media->save();

                return redirect()->route('admin.medias.index')->with('status', 'Media added successfully!');
            } else {
                return back()->withErrors(['file' => 'There was an issue uploading the file.']);
            }
            // Media::create($request);
            return redirect()->route('admin.medias.index')->with('status', 'Media was created successfully.');

        } catch (\Exception $e) {
            Log::error('Error creating post category: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }




    public function edit(string $id)
    {
        $this->hasAccess('Media_update');
        $media = Media::find($id);
        $title = $media->name;
        return view('backend.pages.edit', compact('media', 'title'));
    }


    public function update(Request $request, Media $media)
    {
        //
    }


    public function destroy(string $media)
    {
        $media = Media::where('id', '=', $media)->firstOrFail();

        try {
            $media->delete();
            return redirect()->route('admin.medias.index')->with('status', 'Media was deleted successfully.');

        } catch (\Exception $e) {
            Log::error('Error creating post category: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}