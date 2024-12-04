<?php

namespace App\Http\Controllers;

use App\Models\Article; // Ensure this model exists
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a specific article.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);  // Find article or return 404
        return view('artikel', compact('article'));
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('artikel_create'); // Load the creation form
    }

    /**
     * Store a new article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create the article
        Article::create([
            'author_id' => auth(), // Store the ID of the authenticated user
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        // Redirect to a success page (adjust as needed)
        return redirect()->route('artikel.create')->with('success', 'Artikel created successfully!');
    }
}
