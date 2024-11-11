<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Artikel::all();
        return view('article', compact('articles'));
    }
        public function show()
    {
        $articles = Artikel::all(); // Ambil semua artikel
        return view('dash.article.dash-arti', compact('articles'));
    }

    public function view(Artikel $article)
    {
        return view('dash.article.view', compact('article'));
    }

    public function create()
    {
        return view('dash.article.create'); // View untuk membuat artikel baru
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
            'body' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $validated['foto'] = $imageName;
        }

        $validated['author'] = Auth::user()->name;
        $validated['user_id'] = Auth::id();

        Artikel::create($validated);

        return redirect('/article')->with('success', 'Article created successfully!');
    }

    public function edit(Artikel $article)
    {
        if ($article->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('dash.article.edit', compact('article')); // Tampilkan form edit artikel
    }

    public function update(Request $request, Artikel $article)
    {
        if ($article->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'foto' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
            'body' => 'required',
        ]);

        // Handle file upload jika ada gambar baru
        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $validated['foto'] = $imageName;
        }

        $validated['author'] = Auth::user()->name;

        $article->update($validated); // Update artikel

        return redirect()->route('article.show')->with('success', 'Article updated successfully!');
    }

    public function destroy(Artikel $article)
    {
        // Memeriksa apakah pengguna adalah admin atau pemilik artikel
        if (auth()->user()->isAdmin() || $article->user_id === auth()->id()) {
            // Menghapus gambar dari storage jika ada
            if ($article->foto) {
                unlink(public_path('images/' . $article->foto)); // Hapus gambar dari storage
            }

            // Menghapus artikel
            $article->delete();

            return redirect()->route('article.show')->with('success', 'Article deleted successfully!');
        }
    }
}