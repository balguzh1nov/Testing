<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $newsId)
    {
        $validatedData = $request->validate([
            'text' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->news_id = $newsId;
        $comment->text = $request->text;
        $comment->save();

        return response()->json($comment, 201);
    }
}
