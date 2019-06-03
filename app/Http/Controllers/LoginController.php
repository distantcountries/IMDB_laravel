<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller

{
    public function __construct() {
        // dd('test');
        $this->middleware('guest', ['only'=>'destroy']);
    }

    public function create()
    {   
        // dd('test');
        return view('auth.login');
    }


    public function store()
    {
        $this->validate(request(), User::STORE_RULES);

        if(!auth()->attempt(
            request(['email', 'password'])
        )) {
            return back()->withErrors([
                'message' => "Greska, molimo probajte ponovo."
            ]);
        }

        session()->flash('message', 'Hvala sto si se ulogovao!'); 
        return redirect('/');
    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
