<?php

namespace App\Http\Controllers;



use App\Models\DiscussionComment;
use Illuminate\Http\Request;

class DiscussionCommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'discussion_id' => 'required|exists:discussions,id',
            'content' => 'required|string|max:1000',
        ]);

        DiscussionComment::create([
            'discussion_id' => $validatedData['discussion_id'],
            'created_by' => auth()->id(),
            'content' => $validatedData['content'],
        ]);

        return back()->with('success', 'Comment posted successfully!');
    }
}