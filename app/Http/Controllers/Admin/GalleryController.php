<?php

// app/Http/Controllers/Admin/GalleryController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $path,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Image added successfully');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();

        return back()->with('success', 'Image deleted');
    }
    // app/Http/Controllers/Admin/GalleryController.php

public function edit(Gallery $gallery)
{
    return view('admin.gallery.edit', compact('gallery'));
}

public function update(Request $request, Gallery $gallery)
{
    $request->validate([
        'title' => 'nullable|string|max:255',
        'category' => 'nullable|string|max:100',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        Storage::disk('public')->delete($gallery->image);
        $gallery->image = $request->file('image')->store('gallery', 'public');
    }

    $gallery->update([
        'title' => $request->title,
        'category' => $request->category,
        'image' => $gallery->image,
    ]);

    return redirect()->route('admin.gallery.index')
        ->with('success', 'Gallery updated successfully');
}

}

