<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index()
{
    $galleries = Galery::all();
    return view('dash.galery.dash-gal', compact('galleries'));
}

public function show()
{
    $galleries = Galery::all();
    return view('galery' , compact('galleries'));
}


    public function create()
    {
        return view('dash.galery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = $imageName;
        }

        $validated['author'] = Auth::user()->name;

        $validated['user_id'] = Auth::id();

        Galery::create($validated);

        return redirect('/galery')->with('success', 'Gallery item created successfully!');
    }


    public function edit(Galery $gallery)
    {
        if ($gallery->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('dash.galery.edit', compact('gallery'));
    }


    // Update galeri di database
    public function update(Request $request, Galery $gallery)
    {
        // Check if the logged-in user is the owner of the gallery
        if ($gallery->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        // Validate input
        $validated = $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = $imageName;
        }

        // Keep the author the same as the currently authenticated user
        $validated['author'] = Auth::user()->name;

        // Update the gallery item
        $gallery->update($validated);

        return redirect()->route('gallery.index')->with('success', 'Gallery item updated successfully!');
    }

    public function destroy(Galery $gallery)
    {
        // Memeriksa apakah pengguna adalah admin atau pemilik artikel
        if (auth()->user()->isAdmin() || $gallery->user_id === auth()->id()) {
            // Menghapus gambar dari storage jika ada
            if ($gallery->image) {
                unlink(public_path('images/' . $gallery->image)); // Hapus gambar dari storage
            }

            // Menghapus artikel
            $gallery->delete();

            return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully!');
        }
    }
}