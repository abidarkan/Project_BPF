<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Artikel; // Use the correct model
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    // Show the create article form
    public function show($id)
    {
        $artikel = Article::findOrFail($id); // Fetch the artikel or fail
        return view('artikel.show', compact('artikel')); // Return view with artikel
    }

    public function create()
    {
        return view('artikel.create'); // Create form view
    }

    // Store the article in the database
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create the artikel
        $artikel = Article::create([
            'author_id' => auth(), // Store authenticated user ID
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        // Redirect to the relevant page
        return redirect()->route('artikel.index')->with('success', 'Artikel created successfully!');
    }
}
