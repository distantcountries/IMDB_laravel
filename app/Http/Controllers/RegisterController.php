<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\MailVerification;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(request(), User::STORE_RULES);

        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();
        
        \Mail::to($user->email)->send(new MailVerification($user));
     ;
        // auth()->login($user);
        session()->flash('Thanx for registration!'); 
        
        // return redirect(route('VerifyEmailFirst'));//dodato

        return redirect('/login');
    }
}
