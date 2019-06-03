<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller

{
    public function __construct() {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create()
    {   
        return view('auth.login');
    }


    // public function store()
    // {
    //     if(!auth()->attempt(
    //         request(['email', 'password'])
    //     )) {
    //         return back()->withErrors([
    //             'message' => "Greska, molimo probajte ponovo."
    //         ]);
    //     }

    //     session()->flash('message', 'Hvala sto si se ulogovao!'); //ispisace nakon logovanja
    //     return redirect('all_teams');
    // }


    public function destroy()
    {
        auth()->logout();

        return redirect('all_teams');
    }
}
