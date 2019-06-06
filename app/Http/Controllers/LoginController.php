<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    

    public function index()
    {
        return view('auth.login');
    }

    public function store()
    {
        $this->validate(request(), User::LOG_RULES);

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Error, please try again.'
            ]);
        } else {

            if(auth()->user()->is_verified) {
                return redirect('/');
            } else {
                $this->destroy();
                return back()->withErrors(['message' => 'Please verify your account!']);
            }
        }

        // session()->flash('Hello!');
        // return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        session()->flash('Bye bye!');
        return redirect('/login');
    }

    public function verification ($id) {

        $user = User::find($id);

        $user->is_verified = true;
        $user->save();

        return view('auth.verification', compact('user'));

    }

}
