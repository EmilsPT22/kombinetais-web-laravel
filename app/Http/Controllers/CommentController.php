<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, post $post)
    {
        $request->validate(['content' => 'required|string']);
        $post->comments()->create([
            'content' => $request->content,
            'user_id' => $post->user_id
    ]);
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
