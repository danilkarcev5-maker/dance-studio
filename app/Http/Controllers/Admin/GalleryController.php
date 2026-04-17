<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,png,mp4|max:10240', // До 10MB
        ]);

        $file = $request->file('file');
        $filePath = $file->store('gallery', 'public');
        $fileType = $file->getClientMimeType() === 'video/mp4' ? 'video' : 'image';

        Gallery::create([
            'title' => $request->title,
            'file_path' => $filePath,
            'file_type' => $fileType,
            'description' => $request->description,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Файл добавлен в галерею!');
    }

    public function destroy(Gallery $gallery)
    {
        \Storage::disk('public')->delete($gallery->file_path);
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Файл удален!');
    }
}