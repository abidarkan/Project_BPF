<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\Tag;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::with('user', 'tags')->get();
        return view('diskusi', compact('discussions'));
    }

    public function show($id)
    {
        $discussion = Discussion::with(['user', 'tags', 'comments.user'])->findOrFail($id);
        return view('showDiskusi', compact('discussion'));
    }

    public function create()
    {
        $tags = Tag::all(); // Fetch all tags
        return view('createDiskusi', compact('tags'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'required|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $discussion = Discussion::create([
            'created_by' => auth()->id(),
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        $discussion->tags()->attach($validatedData['tags']);

        return redirect()->route('diskusi.index')->with('success', 'Discussion created successfully!');
    }
}
