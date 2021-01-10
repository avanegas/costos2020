<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post){
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->parent_id = $request->parent_id;
        $comment->user_id = \auth()->id();

        $post->comments()->save($comment);

        return \redirect()->route('posts.show', $post);
    }
}
