<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Article::with(['user', 'tags'])->get();
        return view('artikel', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with(['user', 'tags'])->findOrFail($id);
        return view('artikel_show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('artikel_create', compact('tags'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $article = Article::create([
            'author_id' => auth()->id(),
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        $article->tags()->attach($validatedData['tags']);

        return redirect()->route('artikel.index')->with('success', 'Artikel created successfully!');
    }

    public function edit($id)
    {
        $article = Article::with('tags')->findOrFail($id);
        $tags = Tag::all();
        return view('artikel_edit', compact('article', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        $article->tags()->sync($validatedData['tags']);

        return redirect()->route('artikel.index')->with('success', 'Artikel updated successfully!');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->tags()->detach();
        $article->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel deleted successfully!');
    }
}
