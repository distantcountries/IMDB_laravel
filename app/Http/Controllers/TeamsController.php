<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('age',['only' => 'store']); 
    }

    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams') );
    }

    public function show($id)
    {
        $team = Team::with('players')->find($id);
        return view('teams.show', compact('team'));
    }
}
