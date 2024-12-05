<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Article::with('user')->get();
        return view('artikel', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with('user')->findOrFail($id);
        return view('artikel_show', compact('article'));
    }

    public function create()
    {
        return view('artikel_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Article::create([
            'author_id' => auth()->id(), // Store the ID of the authenticated user
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('artikel.create')->with('success', 'Artikel created successfully!');
    }
}
