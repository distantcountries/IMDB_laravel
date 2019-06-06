<?php

namespace App;
use App\Comment;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'password-confirm'
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
        'password' => 'required|min:4',
        'password-confirm' => 'required|same:password'

    ];

    const LOG_RULES = [
        'email' => 'required', 
        'password' => 'required'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
