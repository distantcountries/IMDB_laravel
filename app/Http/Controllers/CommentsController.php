<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($use_id) 
    {
        $post = Post::find($use_id);

        $post->comments()->create(request()->all());
        
        return redirect()->route('single-post',['id' => $use_id]);
    }
}
