<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    const STORE_RULES = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'password_confirmation' => 'required_with:password|same:password|min:6'
    ];

 
}
