<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'email', 'adress', 'city'
    ];
    
    const STORE_RULES = [
        'name' => 'required',
        'email' => 'required',
        'adress' => 'required',
        'city' => 'required'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
