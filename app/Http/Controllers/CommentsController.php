<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Team;
use Illuminate\Support\Facades\Auth;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-words')->only('store');
    }

    public function store (Request $request, $team_id) {
      
        $request->validate([
               'content' => 'required | min:10'
            ]);
            
        $team = Team::find($team_id);

        $comment = new Comment;

        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $team_id;
        $comment->save();

        \Mail::to($team->email)->send(new CommentReceived($team));
        return back();

        // return redirect()->route('single-team', ['id' => $team_id]);
    }
}

